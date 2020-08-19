<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;
use App\course;
use App\topic;
use App\User;
use App\user_course;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
class AjaxController extends Controller
{
    public function getCourse($topic_id)
    {
        $course = course::where('topic_id','=',$topic_id)->get();
        foreach($course as $cr)
        {
            echo "<option value='".$cr->course_id."'>".$cr->name."</option>";
        }
    }
}
