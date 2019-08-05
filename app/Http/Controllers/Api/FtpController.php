<?php
    namespace App\Http\Controllers\Api;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Dingo\Api\Routing\Helpers;
    use App\ManageFtp;
    use Auth;

    class FtpController extends Controller {
        use Helpers;
        private $user;
        private $model;
        public function __construct(){
            $this->user = Auth::guard('api')->user();
            $this->model = ManageFtp::class;
        }

        public function list(Request $request){
            $data = $this->model::where('user_id', $this->user->id)->get();
            return \Response::json([ 'status'=>'success', 'code'=> 200, 'message' => '', 'list'=> $data ]);
        }
    }