<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\QuestionController;


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

    //courses
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('courses/view', [CourseController::class, 'view'])->name('courses.view');
    Route::put('courses', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('courses', [CourseController::class, 'delete'])->name('courses.delete');

    //years
    Route::get('years/create',[AcademicYearController::class, 'create'])->name('years.create');
    Route::post('years', [AcademicYearController::class, 'store'])->name('years.store');

    //specializations
    Route::get('specializations/create',[SpecializationController::class, 'create'])->name('specializations.create');
    Route::post('specializations', [SpecializationController::class, 'store'])->name('specializations.store');

    //exams
    Route::get('exams', [ExamController::class, 'index'])->name('exams.index');
    Route::get('exams/create', [ExamController::class, 'create'])->name('exams.create');
    Route::post('exams', [ExamController::class, 'store'])->name('exams.store');
    Route::get('exams/view', [ExamController::class, 'view'])->name('exams.view');
    Route::put('exams', [ExamController::class, 'update'])->name('exams.update');
    Route::delete('exams', [ExamController::class, 'delete'])->name('exams.delete');

    //instructors
    Route::get('Teachers', [TeacherController::class, 'index'])->name('Teachers.index');
    Route::get('Teachers/create', [TeacherController::class, 'create'])->name('Teachers.create');
    Route::post('Teachers', [TeacherController::class, 'store'])->name('Teachers.store');
    Route::get('Teachers/view', [TeacherController::class, 'view'])->name('Teachers.view');
    Route::put('Teachers', [TeacherController::class, 'update'])->name('Teachers.update');
    Route::delete('Teachers', [TeacherController::class, 'delete'])->name('Teachers.delete');

    //stutents
    Route::get('dents', [UserController::class, 'index'])->name('dents.index');
    Route::get('dents/create', [UserController::class, 'create'])->name('dents.create');
    Route::post('dents', [UserController::class, 'store'])->name('dents.store');
    Route::get('dents/view', [UserController::class, 'view'])->name('dents.view');
    Route::put('dents', [UserController::class, 'update'])->name('dents.update');
    Route::delete('dents', [UserController::class, 'delete'])->name('dents.delete');
    
    //chart
    Route::get('/user-activity-chart', [ChartController::class, 'getUserActivity']);

    //questions
    Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('questions/view', [QuestionController::class, 'view'])->name('questions.view');
    Route::put('questions', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('questions', [QuestionController::class, 'delete'])->name('questions.delete');
    


});
require __DIR__ . '/auth.php';
