<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //crear
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //guardar un estudiante
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //mostrar el detalle del estudiante
        $student = Student::find($id);
        return view('show-students', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //formulario para editar el estudiante
        $student = Student::find($id);
        return view('editStudents', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Buscar el estudiante por su ID
        $student = Student::find($id);
        dd($student);
    
        // Verificar si el estudiante existe
        if (!$student) {
            // Manejo personalizado del error
            $errorMessage = 'Estudiante no encontrado';
            // Redireccionar con un mensaje de error
            return redirect()->back()->with('error', $errorMessage);
        }
    
        // Actualizar los campos del estudiante con los datos del formulario
        $student->update([
            'name_student' => $request->input('name_student'),
            'lastname_student' => $request->input('lastname_student'),
            'comments' => $request->input('comments'),
        ]);
    
        // Redireccionar con un mensaje de éxito
        return redirect()->route('students.index')->with('success', 'Estudiante actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //eliminar
    }
}
