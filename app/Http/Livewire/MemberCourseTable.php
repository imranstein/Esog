<?php

namespace App\Http\Livewire;

use App\Models\MemberCourse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class MemberCourseTable extends PowerGridComponent
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
    * @return Builder<\App\Models\MemberCourse>
    */
    public function datasource(): Builder
    {
        return MemberCourse::query();
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
            ->addColumn('member_id', function ($model) {
                return $model->member->name;
            })
            ->addColumn('course', function ($model) {
                return e($model->course->title);
            })
            ->addColumn('is_approved_formatted', fn (MemberCourse $model) => Carbon::parse($model->is_approved)->format('d/m/Y H:i:s'))
            ->addColumn('started_at_formatted', fn (MemberCourse $model) => Carbon::parse($model->started_at)->format('d/m/Y H:i:s'))
            ->addColumn('finished_at_formatted', fn (MemberCourse $model) => Carbon::parse($model->finished_at)->format('d/m/Y H:i:s'))
;}

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

            Column::make('MEMBER ID', 'member_id')
                ->sortable()
                ->searchable(),

            Column::make('COURSE ID', 'course_id')
                ->sortable()
                ->searchable(),

            Column::make('IS APPROVED', 'is_approved_formatted', 'is_approved')
                ->searchable()
                ->sortable()
               ,

            Column::make('STARTED AT', 'started_at_formatted', 'started_at')
                ->searchable()
                ->sortable()
               ,

            Column::make('FINISHED AT', 'finished_at_formatted', 'finished_at')
                ->searchable()
                ->sortable()
               ,

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid MemberCourse Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
       return [
        //    Button::make('edit', 'Edit')
        //        ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
        //        ->route('member-course.edit', ['member-course' => 'id']),

        //    Button::make('destroy', 'Delete')
        //        ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
        //        ->route('member-course.destroy', ['member-course' => 'id'])
        //        ->method('delete')
        Button::make('approve','Approve')
        ->class('btn btn-success')
        ->target('_self')
            ->route('course.approve', ['member-course' => 'id'])
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
     * PowerGrid MemberCourse Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
           //hide approve button if is_approved is not null
              Rule::make('approve')
                ->when('is_approved', '!=', null)
                ->hide(),
                Rule::button('approve')
                ->when(fn () => Auth::user()->cannot('memberCourse-approve'))
                ->hide(),

        ];
    }

}
