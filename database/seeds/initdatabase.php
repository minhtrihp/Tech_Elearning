<?php

use Illuminate\Database\Seeder;

class initdatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                ////Bang nhan vien
                for($i = 0; $i <= 10; $i++) {
                    $level = 0;
                    if($i == 0){
                        $level = 2;
                    } elseif ($i % 2 == 0) {
                        $level = 0;
                    }
                    else {
                        $level = 1;
                    }
                    DB::table('users')->insert([
                        'name' => $i.'name',
                        'email' => $i.'email',
                        'password' => $i.'password',
                        'birthdate' => date("Y-m-d H:i:s"),
                        'level' => $level
                    ]);
                }
        
                //Bang chu de
                for($i = 1; $i <= 5; $i++) {
                    DB::table('topics')->insert([
                        'name' => $i.'tenChuDe',
                    ]);
                }
        
                //Bang khoa hoc
                for($i = 1; $i <= 10; $i++) {
                    $chuDe_id = 0;
                    if($i > 5){
                        $chuDe_id = $i - 5;
                    } else {
                        $chuDe_id = $i;
                    }
        
                    DB::table('courses')->insert([
                        'name' => $i.'tenKhoaHoc',
                        'describe' => $i.'moTa',
                        'topic_id' => $chuDe_id,
                        'user_id' => $i
                    ]);
                }
        
                //Bang bai giang
                for($i = 1; $i <= 10; $i++) {
                    for($j = 1; $j <= 3; $j++){
                        DB::table('lessons')->insert([
                            'name' => $i.$j.'tenBaiGiang',
                            'describe' => $i.$j.'moTa',
                            'content' => $i.$j.'noiDung',
                            'link' => $i.$j.'linkVideo',
                            'course_id' => $i
                        ]);
                    }
                }
        
                //Bang HV-KH
                for($i = 1; $i <= 10; $i++) {
                    DB::table('user_course')->insert([
                        'course_id' => $i,
                        'user_id' => 11 - $i
                    ]);
                }
        
                //Bang KH-BG
                for($i = 1; $i <= 10; $i++) {
                    DB::table('course_lesson')->insert([
                        'user_course_id' => $i,
                        'lesson_id' => $i
                    ]);
                }
        
                //Bang tin tuc
                for($i = 1; $i <= 10; $i++) {
                    for($j = 1 ; $j <=5 ; $j++){
                        DB::table('news')->insert([
                            'name' => $i.$j.'tenTinTuc',
                            'describe' => $i.$j.'moTa',
                            'content' => $i.$j.'noiDung',
                            'topic_id' => $j,
                            'user_id' => $i
                        ]);
                    }
                }
        
                //Bang binh luan
                for($i = 1; $i <= 10; $i++) {
                    for($j = 1 ; $j <=5 ; $j++){
                        DB::table('comments')->insert([
                            'content' => $i.$j.'noiDung',
                            'lesson_id' => $j,
                            'user_id' => $i,
                            'news_id' => $i * $j
                        ]);
                    }
                }
        
                //Bang phan hoi
                for($i = 1; $i <= 50; $i++) {
                    DB::table('feedbacks')->insert([
                        'content' => $i.'noiDung',
                        'comment_id' => $i,
                        'user_id' => ( $i % 10) + 1
                    ]);
                }
    }
}
