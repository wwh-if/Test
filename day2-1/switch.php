<?php
	if ($_SERVER['argc'] >= 2) {
		$name = $_SERVER['argv'][1];
	} else {
		print "�������û���";
		exit();
	}
	var_dump($name);
	switch ($name) {
		case '����':
			print "VIP�ͻ��������";
			break;
		case '����':
			print "��ǰ̨���ѣ������Ա��";
			break;
		case '����':
			print "�󵶿���������";
			break;
		case '����':
			print "������Ա���߲���";
			break;
		default:
			print "����Ъҵ����ԤԼ���ý�";
			break;
		
	}
?>