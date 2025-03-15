<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTable(
    'blacklist',
    function (Blueprint $table) {
        $table->increments('id');

        $table->tinyInteger('type')->default(0)->common("类型 0-内部 1-公开");
        $table->string('email')->common("邮箱")->index();
        $table->string('username')->common("用户名");

        // created_at & updated_at
        $table->timestamps();

        $table->index('created_at');
    }
);
