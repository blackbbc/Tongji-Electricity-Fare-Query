# -*- coding: utf-8 -*-

import smtplib
import json

from email.MIMEMultipart import MIMEMultipart
from email.MIMEText import MIMEText

def sendmail(fare):
    """
    Send email
    """
    with open("config.json", "r") as f:
        text = f.read()
    json_data = json.loads(text)
    username = json_data['username']
    password = json_data['password']

    server = smtplib.SMTP('smtp.163.com', 25)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login(username, password)

    fromaddr = username
    toaddr = "505968815@qq.com"
    msg = MIMEMultipart()
    msg['From'] = fromaddr
    msg['To'] = toaddr
    msg['Subject'] = "没电辣( TдT)"

    body = "电费还剩：" + str(fare) + " (つд⊂)"
    msg.attach(MIMEText(body, 'plain'))

    text = msg.as_string()
    server.sendmail(fromaddr, toaddr, text)
