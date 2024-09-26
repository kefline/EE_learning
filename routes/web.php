<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProgramController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/student', [UserController::class, 'student'])->name('instructor.student');
    Route::get('/courses', [UserController::class, 'courses'])->name('instructor.courses');
    Route::get('/instructor_dashboard', [InstructorController::class, 'instructor_dashboard'])->name('instructor.dashboard');
    Route::get('/instructor_course', [InstructorController::class, 'instructor_course'])->name('instructor.instructor_course');
    Route::get('/instructor_student', [InstructorController::class, 'instructor_student'])->name('instructor.instructor_student');
    Route::get('/instructor_assignments', [InstructorController::class, 'instructor_assignments'])->name('instructor.instructor_assignments');
    Route::get('/instructor_grades', [InstructorController::class, 'instructor_grades'])->name('instructor.instructor_grades');
    Route::get('/instructor_schedule', [InstructorController::class, 'instructor_schedule'])->name('instructor.instructor_schedule');
    Route::get('/resources', [InstructorController::class, 'resources'])->name('instructor.resources');
    Route::get('/notifications', [InstructorController::class, 'notifications'])->name('instructor.notifications');
    Route::get('/profile', [InstructorController::class, 'profile'])->name('instructor.profile');
    Route::get('/analytics', [InstructorController::class, 'analytics'])->name('instructor.analytics');
    Route::get('/help', [InstructorController::class, 'help'])->name('instructor.help');

    Route::get('/student_profile', [StudentController::class, 'student_profile'])->name('student.profile');
    Route::get('/student_course', [StudentController::class, 'student_course'])->name('student.course');
    Route::get('/student_assignments', [StudentController::class, 'student_assignments'])->name('student.assignments');
    Route::get('/question_level', [StudentController::class, 'question_level'])->name('student.question_level');
    Route::get('/question_type', [StudentController::class, 'question_type'])->name('student.question_type');
    Route::get('take', [StudentController::class, 'take'])->name('student.take');
    Route::get('/quiz', [StudentController::class, 'quiz'])->name('student.quiz');
    Route::get('/calendar', [StudentController::class, 'calendar'])->name('student.calendar');
    Route::get('/forum', [StudentController::class, 'forum'])->name('student.forum');
    Route::get('/result', [StudentController::class, 'result'])->name('student.result');
    Route::get('/student_progress', [StudentController::class, 'student_progress'])->name('student.student_progress');
    Route::get('/announcements', [StudentController::class, 'announcements'])->name('student.announcements');
    Route::get('/student_dashboard', [StudentController::class, 'student_dashboard'])->name('student.dashboard');


    Route::get('/admin_results', [AdminController::class, 'admin_results'])->name('admin.admin_results');
    Route::get('/programs', [AdminController::class, 'programs'])->name('admin.programs');
    Route::get('/course', [AdminController::class, 'course'])->name('admin.course');
    Route::get('/Exams_form', [AdminController::class, 'Exams_form'])->name('admin.Exams_forms');
    Route::get('/Add_student', [AdminController::class, 'Add_student'])->name('admin.Add_student');
    Route::get('/Add_instructor', [AdminController::class, 'Add_instructor'])->name('admin.Add_instructor');
    Route::get('/list_programs', [AdminController::class, 'list_programs'])->name('admin.list_programs');
    Route::get('/list_courses', [AdminController::class, 'list_courses'])->name('admin.list_courses');
    Route::get('/list_exam', [AdminController::class, 'list_exam'])->name('admin.list_exam');
    Route::get('/list_student', [AdminController::class, 'list_student'])->name('admin.list_student');
    Route::get('list_instructor', [AdminController::class, 'list_instructor'])->name('admin.list_instructor');

    //levels
    // Route::get('levels', [LevelController::class, 'index'])->name('levels.index');
    // Route::get('levels', [LevelController::class, 'create'])->name('levels.create');
    // Route::post('levels', [LevelController::class, 'store'])->name('levels.store');
    // Route::get('levels', [LevelController::class, 'view'])->name('levels.view');
    // Route::put('levels', [LevelController::class, 'update'])->name('levels.update');
    // Route::delete('levels', [LevelController::class, 'delete'])->name('levels.delete');
    Route::resource('levels', LevelController::class);

    //departments
    Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('departments', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('departments/view', [DepartmentController::class, 'view'])->name('departments.view');
    Route::put('departments', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('departments', [DepartmentController::class, 'delete'])->name('departments.delete');

    //programs
    Route::get('programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('programs', [ProgramController::class, 'store'])->name('programs.store');
    Route::get('programs/view', [ProgramController::class, 'view'])->name('programs.view');
    Route::put('programs', [ProgramController::class, 'update'])->name('programs.update');
    Route::delete('programs', [ProgramController::class, 'delete'])->name('programs.delete');


});
require __DIR__ . '/auth.php';
