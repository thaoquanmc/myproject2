<?php

class Config extends Db
{

    //khởi tạo database
    function createDatabase()
    {
        $sql[] = "CREATE TABLE test(
                    ID INT 
                    )";
        $this->execcute($sql[0]);
    }

}