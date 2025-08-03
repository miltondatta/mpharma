<?php

namespace App\Admin\Controllers;

use App\Models\TermsAndCondition;
use App\Models\UserType;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TermsAndConditionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Terms and Conditions';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TermsAndCondition);

        $grid->column('id', __('Id'));
        $grid->column('user_type', __('User Type'))->display(function($user_type){
            $type_name   = UserType::where('id',$user_type)->value('user');
            if ($user_type == 1){
                return "<span class='label label-info'>$type_name</span>";
            }else if ($user_type == 2) {
                return "<span class='label label-warning'>$type_name</span>";
            }else if($user_type == 3){
                return "<span class='label label-danger'>$type_name</span>";
            }else {
                return "<span class='label label-success'>$type_name</span>";
            }
        });
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->filter(function ($filter) {
            $filter->like('title', 'Title');
        });
        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new TermsAndCondition);
        $user_types = UserType::pluck('user', 'id');
        
        $form->select('user_type', __('UserType'))->options($user_types)->rules(function ($form) {
            return 'required';
        });
        $form->text('title', __('Title'))->rules(function ($form) {
            return 'required|max:100';
        });
        $form->textarea('description', __('Description'))->rules(function ($form) {
            return 'required';
        });
        $form->tools(function (Form\Tools $tools) {
           $tools->disableDelete(); 
           $tools->disableView();
        });
        $form->footer(function ($footer) {
           $footer->disableViewCheck();
           $footer->disableEditingCheck();
           $footer->disableCreatingCheck();
        });

        return $form;
    }
}
