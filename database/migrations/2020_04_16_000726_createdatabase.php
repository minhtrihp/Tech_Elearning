<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createdatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        //Bang chu de
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('topic_id');
            $table->string('name');

            $table->timestamps();
        });

        //Bang khoa hoc
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('name');
            $table->string('describe');
            $table->unsignedInteger('topic_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('topic_id')->references('topic_id')->on('topics');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        //Bang bai giang
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('lesson_id');
            $table->string('name');
            $table->string('describe');
            $table->text('content');
            $table->string('link')->nullable();
            $table->unsignedInteger('course_id');

            $table->foreign('course_id')->references('course_id')->on('courses');

            $table->timestamps();
        });

        //Bang HV-KH
        Schema::create('user_course', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        //Bang KH-BG
        Schema::create('course_lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_course_id');
            $table->unsignedInteger('lesson_id');

            $table->foreign('user_course_id')->references('id')->on('user_course');
            $table->foreign('lesson_id')->references('lesson_id')->on('lessons');

            $table->timestamps();
        });

        //Bang tin tuc
        Schema::create('news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('name');
            $table->string('describe');
            $table->text('content');
            $table->unsignedInteger('topic_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('topic_id')->references('topic_id')->on('topics');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        //Bang binh luan
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->text('content');
            $table->unsignedInteger('lesson_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('news_id');

            $table->foreign('lesson_id')->references('lesson_id')->on('lessons');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('news_id')->references('news_id')->on('news');

            $table->timestamps();
        });

        //Bang phan hoi
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('feedback_id');
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('comment_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('comment_id')->references('comment_id')->on('comments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('feedbacks');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('news');
        Schema::dropIfExists('course_lesson');
        Schema::dropIfExists('user_course');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('topics');
        Schema::dropIfExists('users');
    }
}
