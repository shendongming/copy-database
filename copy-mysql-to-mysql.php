<?php

/**
* 
*  在线 复制数据 从 mysql 到 mysql的 复制 工具,不影响在线服务
*  参数 php copy-mysql-to-mysql.php config=db1.php
*
*  db1.php=array(
*		'src' => array(
*			array(
*				'dbname'=>'xxx',
*				'user'=>'root',
*				'passwd'=>'root',
*				'host'=>'db1',		
*
*			)
*		),
*		'to'  => array(
*			array(
*				'dbname'=>'xxx',
*				'user'=>'root',
*				'passwd'=>'root',
*				'host'=>'db2',
*			),
			'/tmp/1.sql',
			'/tmp/1.jsons',
*
*		),
*	)
* 
**/

