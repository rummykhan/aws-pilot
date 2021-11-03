<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environments', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('stage', ['BETA', 'STAGING', 'PROD']);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('servers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('type', ['UBUNTU', 'FEDORA', 'REDHAT', 'AMI']);

            $table->string('permissionFilePath')->nullable();
            $table->string('loginUser')->nullable();

            $table->unsignedBigInteger('environmentId');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('environmentId')->references('id')->on('environments');
        });

        Schema::create('webServers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('type', ['NGINX', 'HTTPD']);

            $table->string('absoluteBasePath')->nullable();

            $table->unsignedBigInteger('serverId');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('serverId')->references('id')->on('servers');
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('language', ['PHP']);
            $table->enum('framework', ['LARAVEL']);

            $table->unsignedBigInteger('environmentId');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('environmentId')->references('id')->on('environments');
        });

        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('type', ['REMOTE', 'LOCAL']);
            $table->string('absolutePath');

            $table->unsignedBigInteger('serverId');
            $table->unsignedBigInteger('projectId');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('serverId')->references('id')->on('servers');
            $table->foreign('projectId')->references('id')->on('projects');
        });

        Schema::create('gitRepositories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('url');
            $table->string('branch');

            $table->unsignedBigInteger('workspaceId');;

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('workspaceId')->references('id')->on('workspaces');
        });

        Schema::create('syncLinks', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('local_workspace_id');
            $table->unsignedBigInteger('remote_workspace_id');

            $table->enum('type', ['GIT', 'RSYNC']);

            $table->unsignedBigInteger('projectId');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('projectId')->references('id')->on('projects');
            $table->foreign('local_workspace_id')->references('id')->on('workspaces');
            $table->foreign('remote_workspace_id')->references('id')->on('workspaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environments');
        Schema::dropIfExists('servers');
        Schema::dropIfExists('webServers');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('workspaces');
        Schema::dropIfExists('gitRepositories');
        Schema::dropIfExists('syncLinks');
    }
}
