<?php
namespace App\Http\Controllers;
use App\Boletim;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BoletimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //checa se o usuário está cadastrado
        if( Auth::check() ){   
            //retorna somente as atividades cadastradas pelo usuário cadastrado
            $Boletim = Boletim::where('user_id', Auth::id() )->get();     
        }else{
            //retorna todas as Boletims
            $Boletim = Boletim::all();

        }
                
        $Boletim = Boletim::paginate(1);
        return view('boletim.list',['boletim' => $Boletim]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boletim.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'registration.required' => 'É obrigatório informar a matrícula do aluno',
            'user.required' => 'É obrigatório informar o nome do aluno',
            'class.required' => 'É obrigatório informar a disciplina',
            'note.required' => 'É obrigatório informar uma nota',
            'period.required' => 'É obrigatório informar o Trimestre/semestre',
        );
        //vetor com as especificações de validações
        $regras = array(
            'registration' => 'required|integer|max:7',
            'period' => 'required|integer',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('boletim/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Boletim = new Boletim();
        $obj_Boletim->registration = $request['user'];
        $obj_Boletim->user = $request['user'];
        $obj_Boletim->class = $request['class'];
        $obj_Boletim->note = $request['note'];
        $obj_Boletim->period = $request['period'];
        $obj_Boletim->save();
        return redirect('/boletim')->with('success', '');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Boletim  $boletim
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boletim = Boletim::find($id);
        return view('boletim.show',['boletim' => $boletim]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boletim  $boletim
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //busco os dados do obj Atividade que o usuário deseja editar
        $obj_Boletim = Boletim::find($id);
        
        //verifico se o usuário logado é o dono da Atividade
        if( Auth::id() == $obj_Boletim->user_id ){
            //retorno a tela para edição
            return view('boletim.edit',['boletim' => $obj_Boletim]);    
        }else{
            //retorno para a rota /boletim com o erro
            return redirect('/boletim')->withErrors("Você não tem permissão para acessar este boletim");
        }
           
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boletim  $boletim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'registration.required' => 'É obrigatório informar a matrícula do aluno',
            'user.required' => 'É obrigatório informar o nome do aluno',
            'class.required' => 'É obrigatório informar a disciplina',
            'note.required' => 'É obrigatório informar uma nota',
            'period.required' => 'É obrigatório informar o Trimestre/semestre',
        );
        //vetor com as especificações de validações
        $regras = array(
            'registration' => 'required|integer|max:7',
            'period' => 'required|integer',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('boletim/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Boletim = Boletim::findOrFail($id);
        $obj_Boletim->registration = $request['user'];
        $obj_Boletim->user = $request['user'];
        $obj_Boletim->class = $request['class'];
        $obj_Boletim->note = $request['note'];
        $obj_Boletim->period = $request['period'];
        $obj_Boletim->save();
        return redirect('/boletim')->with('success', 'Nota alterada com sucesso!!');
    }
    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Boletim $boletim
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_Boletim = Boletim::find($id);
        
        //verifico se o usuário logado é administrador
        if( Auth::id() == $obj_Boletim->user_id ){
            //retorno o formulário questionando se ele tem certeza
            return view('boletim.delete',['boletim' => $obj_Boletim]);    
        }else{
            //retorno para a rota /boletim com o erro
            return redirect('/boletim')->withErrors("Você não tem permissão para deletar esta nota");
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boletim  $boletim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_Boletim = Boletim::findOrFail($id);
        $obj_Boletim->delete($id);
        return redirect('/boletim')->with('sucess','Nota excluída com Sucesso!!');
    }
}