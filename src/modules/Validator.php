<?php 
    class Validator{
        protected $errors = [];
        protected $rules_names = ['required', 'min', 'max'];
        public function validate($data = [], $rules = []){
            foreach($data as $key => $value){
                if(in_array($key, array_keys($rules))){
                    $this->check([
                        'fieldname' => $key,
                        'value' => $value,
                        'rules' => $rules[$key]
                    ]);
                }
            }
        }
        protected function check($field){
            foreach($field['rules'] as $rule=>$rule_value){
                if(in_array($rule, $this->rules_names)){
                    if(!call_user_func_array([$this, $rule], [$field['value'], $rule_value])){
                        $this->addError($field['fieldname'], '');
                    }
                    else{
                        echo "{$field['fieldname']}: {$rule} - succeful";
                    }
                }
            }
        }

        protected function addError($field, $error){
            $this->errors[$field][] = $error;
        }

        protected function required($value){
            return !empty(trim($value));
        }
        protected function min($value, $rule_value){
            return mb_strlen($value, 'UTF-8') >= $rule_value;
        }
        protected function max($value, $rule_value){
            return mb_strlen($value, 'UTF-8') <= $rule_value;
        }
    }
?>