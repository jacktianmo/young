<?php
	
	//����������xml��ʽ
	header("Content-Type:text/xml;charset=utf-8");
	//��Ҫ��������
	header("Cache-Control:no-cache");
	//��������
	$username=$_GET['username'];// ����Ҫ������ʽ��Ӧ��
	if($username=="x"){
	echo "������";//���ظ�����ҳ���
	
	}
	else{
	
	echo "����";
	}
	

?>
