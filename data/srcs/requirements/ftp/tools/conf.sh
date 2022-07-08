#!/bin/sh

adduser $FTP_USER --disabled-password
cat << EOF | passwd $FTP_USER
$FTP_PASSWD
$FTP_PASSWD
EOF
addgroup --gid 101 nginx
adduser $FTP_USER nginx
echo "$FTP_USER" >> /etc/vsftpd/vsftpd.userlist

exec vsftpd /etc/vsftpd/vsftpd.conf
