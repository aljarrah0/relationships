<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'title' => 'عنوان المنشور الأول للمستخدم الأول',
            'body' => 'يمكن كتابة الأوامر بحروف كبيرة أو صغيرة.',
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'عنوان المنشور الثاني للمستخدم الأول',
            'body' => 'يمكن كتابة الأوامر بحروف كبيرة أو صغيرة.',
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'عنوان المنشور الثالث للمستخدم الأول',
            'body' => 'يمكن كتابة الأوامر بحروف كبيرة أو صغيرة.',
        ]);

        Post::create([
            'user_id' => 2,
            'title' => 'عنوان المنشور الأول للمستخدم الثاني',
            'body' => 'يمكن كتابة الأوامر بحروف كبيرة أو صغيرة.',
        ]);

        Post::create([
            'user_id' => 2,
            'title' => 'عنوان المنشور الثاني للمستخدم الثاني',
            'body' => 'يمكن كتابة الأوامر بحروف كبيرة أو صغيرة.',
        ]);
    }
}
