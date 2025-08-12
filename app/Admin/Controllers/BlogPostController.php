<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\BlogPost;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class BlogPostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BlogPost(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('slug');
            $grid->column('content');
            $grid->column('published_at');
            $grid->column('seo_title');
            $grid->column('seo_description');
            $grid->column('summary');
            $grid->column('main_image_id');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new BlogPost(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('slug');
            $show->field('blog_author_id');
            $show->field('blog_category_id');
            $show->field('content');
            $show->field('published_at');
            $show->field('seo_title');
            $show->field('seo_description');
            $show->field('summary');
            $show->field('main_image_id');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new BlogPost(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('slug');
            $form->text('blog_author_id');
            $form->text('blog_category_id');
            $form->text('content');
            $form->text('published_at');
            $form->text('seo_title');
            $form->text('seo_description');
            $form->text('summary');
            $form->text('main_image_id');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
