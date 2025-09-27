<?php

namespace App\Admin\Controllers\Blog;

use App\Models\Blog\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Post::class, function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('published_at');
            $grid->column('summary');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        return Form::make(Post::class, function (Form $form) {
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
