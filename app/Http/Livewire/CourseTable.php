<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Members;
use App\Models\MemberCourse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class CourseTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Course>
     */
    public function datasource(): Builder
    {
        return Course::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('title')

            /** Example of custom column using a closure **/
            ->addColumn('title_lower', function (Course $model) {
                return strtolower(e($model->title));
            })

            ->addColumn('tags')
            //display 100 characters of the description
            ->addColumn('description', function (Course $model) {
                return substr(e($model->description), 0, 100);
            })
            ->addColumn('author')
            ->addColumn('length');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),

            Column::make('TITLE', 'title')
                ->sortable()
                ->searchable(),

            Column::make('TAGS', 'tags')
                ->sortable()
                ->searchable(),

            Column::make('DESCRIPTION', 'description')
                ->sortable()
                ->searchable(),

            Column::make('AUTHOR', 'author')
                ->sortable()
                ->searchable(),

            Column::make('LENGTH', 'length')
                ->sortable()
                ->searchable(),



        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Course Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class('btn btn-primary')
                ->target('_self')
                ->route('course.edit', ['course' => 'id']),

            Button::make('destroy', 'Delete')
                ->class('btn btn-danger')
                ->target('_self')
                ->route('course.destroy', ['course' => 'id'])
                ->method('delete'),
            Button::make('enroll', 'Enroll')
                ->class('btn btn-success')
                ->target('_self')
                ->route('course.enroll', ['course' => 'id'])
                ->method('post'),


        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Course Action Rules.
     *
     * @return array<int, RuleActions>
     */

    public function actionRules(): array
    {
        if (Auth::user()->roles[0]->name == 'Member') {
            $member_id = Members::where('user_id', Auth::user()->id)->first()->id;
            $userCourse = MemberCourse::where('member_id', $member_id)->pluck('course_id')->toArray();
        }
        else {
            $userCourse = [];
        }

        return [

            //Hide enroll button if user is already enrolled

            Rule::button('enroll')
                ->when(fn ($model) => in_array($model->id, $userCourse))
                ->hide(),
            // hide enroll button if user is not a member
            Rule::button('enroll')
                ->when(fn ($model) => Auth::user()->roles[0]->name != 'Member')
                ->hide(),

        ];
    }
}
