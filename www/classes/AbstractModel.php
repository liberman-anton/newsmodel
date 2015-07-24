<?php

abstract class AbstractModel
{
    static protected $table;

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        $this->data[$k];
    }

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id])[0];
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $ins = [];
        foreach ($cols as $col) {
            $ins[] = ':' . $col;
        }
        echo $sql = '
          INSERT INTO ' . static::$table .
            ' (' . implode(', ', $cols) . ')
          VALUES
          (' . implode(', ', $ins) . ')
          ';
          die;
    }

} 