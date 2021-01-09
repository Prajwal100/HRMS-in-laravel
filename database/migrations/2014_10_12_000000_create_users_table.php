<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('phone');
            $table->string('phone1')->nullable();
            $table->string('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('designation')->nullable();
            $table->string('employee_id')->unique();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->enum('gender',['male','female','others']);
            $table->string('photo')->nullable();
            $table->enum('marital_status',['single','married','divorced']);
            $table->enum('role',['admin','employee'])->default('employee');
            $table->string('joining_date')->nullable();
            $table->string('academic_qualification')->nullable();

            $table->unsignedBigInteger('department_id')->nullable();
            $table->float('joining_salary')->default(0);

            $table->string('bank_holder_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();

            $table->enum('status',['active','inactive'])->default('active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
