<?php
$file_dir = $_GET['filedata'];        //�����ļ����Ŀ¼ 
$file_name = $_GET['filename'];     //�����ļ���  
//����ļ��Ƿ����    
if (! file_exists ( $file_dir . $file_name )) {  
	header('HTTP/1.1 404 NOT FOUND');  
} else {    
    $file = fopen ( $file_dir . $file_name, "rb" ); 
    //�������������һ���ļ�����ʽ���ļ�
    Header ( "Content-type: application/octet-stream" ); 
    //����Χ�Ķ�����λ  
    Header ( "Accept-Ranges: bytes" );  
    //Content-Length��ָ���������������Ӧ�����ݵ��ֽڳ���    
    Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );  
    //����������������ļ��ǿ��Ե������������أ����غ���ļ�����Ϊ$file_name�ñ�����ֵ��
    Header ( "Content-Disposition: attachment; filename=" . $file_name );    
    //��ȡ�ļ����ݲ�ֱ������������
    echo fread ( $file, filesize ( $file_dir . $file_name ) );    
    fclose ( $file );    
    exit ();    
}
