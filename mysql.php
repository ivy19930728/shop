<?php
/*
function sql_create_table($name){//���ͱ�
	$sql = "create table if not exists {$name} (
	id int(11) not null auto_increment comment 'id',
	type varchar(6) not null comment '��������',
	primary key(id)
	)engine = 'MyISAM' default character set utf8" ;
	return mysql_query($sql);
}
function sql_create_table($name){//����
	$sql = "create table if not exists {$name} (
	id int(11) not null auto_increment comment 'id',
	uid varchar(15) not null comment '�˺�id',
	title varchar(30) not null comment '����',
	content text not null comment '����',
	create_time int not null comment '����ʱ��',
	hits int not null comment '���',
	type int(2) not null comment '��������',
	primary key(id)
	)engine = 'MyISAM' default character set utf8" ;
	return mysql_query($sql);
}
function sql_create_table($name){//���۱�
	$sql = "create table if not exists {$name} (
	id int(11) not null auto_increment comment 'id',
	aid int(11) not null comment '����id',
	email varchar(15) not null comment '����',
	content text not null comment '����',
	create_time int not null comment '����ʱ��',
	primary key(id)
	)engine = 'MyISAM' default character set utf8" ;
	return mysql_query($sql);
}
*/
function sql_create_table($name){//�˺ű�
	$sql = "create table if not exists {$name} (
	id int(11) not null auto_increment comment 'id',
	type varchar(6) not null comment 'user_type',
	primary key(id)
	)engine = 'MyISAM' default character set utf8" ;
	return @mysql_query($sql);
}
function sql_create_database($name){
	$sql = "create database if not exists {$name}";
	return @mysql_query($sql);
}
function sql_drop_table($name){
	$sql = "drop table if exists {$name}";
	return @mysql_query($sql);
}
function sql_connect($database){
	$link = @mysql_connect('localhost','root','');
	$rs = mysql_select_db($database,$link);
	mysql_set_charset('uft8');
}
function sql_insert($table,$arr){//ע�����
	//INSERT INTO `{table}` (`k1`,`k2`,`k3`) VALUES (`v1` , `v2` , `v3`);
	$sql = "INSERT INTO `{$table}` ( ";
	foreach( $arr as $k=>$v ){
	    $sql .= "`{$k}`,";
	}
	$sql = trim($sql,',');
	$sql .= ") VALUES (";
	foreach($arr as $v){
		$sql .= "'{$v}',";
	}
	$sql = trim($sql,',');
	$sql .= ')';
	if($rs = @mysql_query($sql)){
		return true;
	}else{
		return false;
	}
}
function sql_select($table,$select,$where,$order,$limit){//���ݵ�ǰҳ��$nowѡ���Ӧҳ������
	if($where){
		$where = " where {$where}";
	}
	if($order){
		$order = " order by {$order} desc";
	}
	if($limit){
		$limit = " limit {$limit}";
	}
	$sql = "select {$select} from {$table}{$where}{$order}{$limit}";
	$result =@mysql_query($sql);
	if(!$result){
		return false;
	}
	$arr = array();
	while($tmp = mysql_fetch_array($result , MYSQL_ASSOC)){
		$arr[] = $tmp;
	}
	return $arr;
}

function sql_update($table,$arr,$where){//�����ݵ�����ֶθ���,$arr���������
	if($where){
		$where = " where {$where}";
	}
	if(is_array($arr)){
		$set = '';
		foreach($arr as $k=>$v){
			$set .= "`{$k}`='{$v}',";
		}
	}else{
		$set = $arr;
	}
	$set = trim($set,',');
	$sql = "update `{$table}` set {$set} {$where}";
	$rs = mysql_query($sql);
	return $rs;
}

function sql_left($table,$select,$table2,$on,$where){
	$sql = "select {$select} from `{$table}` left join `{$table2}` on {$on} where {$where}";
	$result = mysql_query($sql);
	if(!$result){
		return false;
	}
	$arr = array();
	while($tmp = mysql_fetch_array($result , MYSQL_ASSOC)){
		$arr[] = $tmp;
	}
	return $arr;
}

//root function
function sql_alter($table,$old,$new){
	$sql = "alter table {$table} change {$old} {$new}";
	return @mysql_query($sql);
}
function sql_alter_add($table,$name){
	$sql = "alter table {$table} add {$name}";
	return @mysql_query($sql);
}
function sql_delete($table,$where){//
	$sql = "delete from {$table} where {$where}";
	return @mysql_query($sql);
}

?>
