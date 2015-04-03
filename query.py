"""
Query the electricity fare and send email to remind the user when fare is under 7$
"""
import urllib
import urllib2

def main():
    """
    Main Function
    """
    url = "http://202.120.165.79:8801/Default.aspx"

    form_data = {
        "__VIEWSTATE" : "/wEPDwUKMTc0MzU4MjQ1OQ9kFgICAQ9kFggCAQ8QZGQWAQIFZAIDDxAPFgYeDURhdGFUZXh0RmllbGQFCFJPT01OQU1FHg5EYXRhVmFsdWVGaWVsZAUGcm9vbWlkHgtfIURhdGFCb3VuZGdkEBUTBualvOagiw4yMOWPt+alvCAgICAgIA4xOeWPt+alvCAgICAgIA8wN+WPt+WFrOWvkyAgICAPMDjlj7flhazlr5MgICAgDzA55Y+35YWs5a+TICAgIA8xMOWPt+WFrOWvkyAgICAPMTTlj7flhazlr5MgICAgDzEy5Y+35YWs5a+TICAgIA8xNeWPt+WFrOWvkyAgICAPMTPlj7flhazlr5MgICAgDuacrOenkTYgICAgICAgDuacrOenkTUgICAgICAgDuacrOenkTQgICAgICAgDueglOeptjMgICAgICAgDueglOeptjIgICAgICAgDzE25Y+35YWs5a+TICAgIA8xN+WPt+WFrOWvkyAgICAPMTjlj7flhazlr5MgICAgFRMABDQ4MzMENDgzNAExAzQyNQM2NTkDNzQ4Azk4OQQxMjc1BDE1MzgEMTUzOQQzMDAxBDMwMDIEMzAwMwQzMDA0BDMwMDUEMzcwMQQzNzAyBDM3MDMUKwMTZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZxYBAgtkAgUPEA8WBh8ABQhST09NTkFNRR8BBQZyb29taWQfAmdkEBUGBualvOWxgg0y5bGCICAgICAgICAgDTPlsYIgICAgICAgICANNOWxgiAgICAgICAgIA015bGCICAgICAgICAgDTblsYIgICAgICAgICAVBgAEMzAwNgQzMDA3BDMwMDgEMzAwOQQzMDEwFCsDBmdnZ2dnZ2RkAgkPEGRkFgFmZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBAUEYnV5UgUFdXNlZFIFDEltYWdlQnV0dG9uMQUMSW1hZ2VCdXR0b24ydW30dbASgmIrzet7tYvOGCGWG7ZTTdAiCfRndsSKyAA=",
        "drlouming" : "5",
        "radio" : "usedR",
        "ImageButton1.x" : "42",
        "ImageButton1.y" : "21",
        "txt_fangjian" : "417"
    }

    req = urllib2.Request(url)
    data = urllib.urlencode(form_data)

    opener = urllib2.build_opener(urllib2.HTTPCookieProcessor())
    response = opener.open(req, data)

    with open("t.txt", "w") as f:
        f.write(response.read())

if __name__ == '__main__':
    main()
