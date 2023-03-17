<?php

namespace App\Http\Livewire;

use App\Models\Members;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class MemberTable extends PowerGridComponent
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
     * @return Builder<\App\Models\Members>
     */
    public function datasource(): Builder
    {
        //
        return Members::query()->orderBy('created_at', 'desc');
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
            ->addColumn('name')

            /** Example of custom column using a closure **/
            ->addColumn('name_lower', function (Members $model) {
                return strtolower(e($model->name));
            })

            ->addColumn('email')
            ->addColumn('phone')
            ->addColumn('department')
            ->addColumn('designation')
            ->addColumn('workplace')
            ->addColumn('photo', function (Members $model) {
                return '<img src="' . asset($model->photo) . '" width="80" height="80" />';
            })
            ->addColumn('created_at_formatted', fn (Members $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
        // ->addColumn('updated_at_formatted', fn (Members $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
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

            Column::make('NAME', 'name')
                ->sortable()
                ->searchable(),

            Column::make('EMAIL', 'email')
                ->sortable()
                ->searchable(),

            Column::make('PHONE', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('DEPARTMENT', 'department')
                ->sortable()
                ->searchable(),

            Column::make('DESIGNATION', 'designation')
                ->sortable()
                ->searchable(),

            Column::make('WORKPLACE', 'workplace')
                ->sortable()
                ->searchable(),

            Column::make('PHOTO', 'photo'),

            // Column::make('CREATED AT', 'created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable(),

            // Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker(),

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
     * PowerGrid Members Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('edit', 'Edit')
                ->class('btn btn-primary')
                ->target('_self')
                ->route('member.edit', ['member' => 'id']),

            Button::make('destroy', 'Delete')
                ->route('member.destroy', ['member' => 'id'])
                ->class('btn btn-danger')
                ->target('_self')
                ->method('delete'),
            Button::make('approve', 'Approve')
                ->route('member.approve', ['member' => 'id'])
                ->class('btn btn-success')
                ->target('_self')
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
     * PowerGrid Members Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [

            //Hide button approve if is_active is true or isPaid is null
            Rule::button('approve')
                ->when(fn (Members $model) => $model->is_active == true || $model->isPaid == null)
                ->hide(),

            //    Rule::button('approve')
            //    ->when(fn () => Auth::user()->cannot('member-approve'))
            //    ->hide(),
            Rule::button('edit')
                ->when(fn () => Auth::user()->cannot('member-edit'))
                ->hide(),
            Rule::button('delete')
                ->when(fn () => Auth::user()->cannot('member-delete'))
                ->hide(),

        ];
    }
}
