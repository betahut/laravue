<?php
    namespace App\Http\Controllers\Api;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Dingo\Api\Routing\Helpers;
    use Auth;
    use Hash;
    use Validator;
    use App\User;

    class AuthController extends Controller{
        use Helpers;
        
        public function login(){
            dd(Auth::guard('api')->user());
        }

        public function accessToken(Request $request) {
            $validate = $this->validations($request, "login");
            if ($validate["error"]) {
                return $this->prepareResult(false, [], $validate['errors'], "Error while validating user");
            }
            $user = User::where("email", $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    return $this->prepareResult(true, ["accessToken" => $user->createToken('Todo App')->accessToken], [], "User Verified");
                } else {
                    return $this->prepareResult(false, [], ["password" => "Wrong passowrd"], "Password not matched");
                }
            } else {
                return $this->prepareResult(false, [], ["email" => "Unable to find user"], "User not found");
            }
        }

        public function validations($request, $type) {
            $errors = [];
            $error = false;
            if ($type == "login") {
                $validator = Validator::make($request->all(), ['email' => 'required|email|max:255', 'password' => 'required', ]);
                if ($validator->fails()) {
                    $error = true;
                    $errors = $validator->errors();
                }
            }
            elseif($type == "create todo") {
                $validator = Validator::make($request->all(), ['todo' => 'required', 'description' => 'required', 'category' => 'required']);
                if ($validator->fails()) {
                    $error = true;
                    $errors = $validator->errors();
                }
            }
            elseif($type == "update todo") {
                $validator = Validator::make($request->all(), ['todo' => 'filled', 'description' => 'filled', 'category' => 'filled']);
                if ($validator->fails()) {
                    $error = true;
                    $errors = $validator->errors();
                }
            }
            return ["error" => $error, "errors" => $errors];
        }

        private function prepareResult($status, $data, $errors, $msg) {
            return ['status' => $status, 'data' => $data, 'message' => $msg, 'errors' => $errors];
        }

        public function index(Request $request) {
            return $this->prepareResult(true, $request->user()->todo()->get(), [], "All user todos");
        }

        public function show(Request $request, Todo $todo) {
            if ($todo->user_id == $request->user()->id) {
                return $this->prepareResult(true, $todo, [], "All results fetched");
            } else {
                return $this->prepareResult(false, [], "unauthorized", "You are not authenticated to view this todo");
            }
        }

        public function store(Request $request) {
            $error = $this->validations($request, "create todo");
            if ($error['error']) {
                return $this->prepareResult(false, [], $error['errors'], "Error in creating todo");
            } else {
                $todo = $request->user()->todo()->Create($request->all());
                return $this->prepareResult(true, $todo, $error['errors'], "Todo created");
            }
        }

        public function update(Request $request, Todo $todo) {
            if ($todo->user_id == $request->user()->id) {
                $error = $this->validations($request, "update todo");
                if ($error['error']) {
                    return $this->prepareResult(false, [], $error['errors'], "error in updating data");
                } else {
                    $todo = $todo->fill($request->all())->save();
                    return $this->prepareResult(true, $todo, $error['errors'], "updating data");
                }
            } else {
                return $this->prepareResult(false, [], "unauthorized", "You are not authenticated to edit this todo");
            }
        }

        public function destroy(Todo $todo) {
            if ($todo->user_id == $request->user()->id) {
                if ($todo->delete()) {
                    return $this->prepareResult(true, [], [], "Todo deleted");
                }
            } else {
                return $this->prepareResult(false, [], "unauthorized", "You are not authenticated to delete this todo");
            }
        }

        
    }
