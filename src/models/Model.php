<?php

    class Model{
        protected static $tableName = 'users';
        protected static $columns = [];
        protected $values = [];
        function __construct($arr){
            $this->loadFromArray($arr);
        }
        public function loadFromArray($arr){
            if($arr){
                foreach($arr as $key => $values){
                     $this->$key = $values;
                }
            }
        }
        public function __get($key){
            return $this->values[$key];
        }
        public function __set($key, $value){
            $this->values[$key] = $value;
        }

       
        
        public static function getResultSetFromSelect($filters = [], $columns = '*'){
            $sql = "SELECT ${columns} FROM "
                . static::$tableName
                . static::getFilters($filters);
            $result = Database::getResultFromQuery($sql);
            if($result->num_rows === 0){
                return null;
            }else{
                return $result;
            }
        }
        private static function getFilters($filters){
            $sql = '';
            if(count($filters) > 0){
                $sql .= " WHERE 1 = 1";
                foreach($filters as $column => $value) {
                    $sql .= " AND ${column} = ". static::getFormatedValue($value);
                }
                $sql .= ';';
            }
            return $sql;
        }
        private static function getFormatedValue($value){
            switch ($value){
                case is_null($value):
                    return "null";
                    break;
                 
                case is_string($value):
                    return "'$value'";
                    break;
                 
                default:
                    return $value;
                    break;
                 
            }
        }
    } 