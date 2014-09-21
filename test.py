
import requests

url = 'http://aboutwilson.net/apps/testfinfo.php'
payload = {'wel-url': 'http://cvmweb.cvm.gov.br/swb/sistemas/scw/DownloadArqs/LeDownloadArqs.aspx?VL_GUID=99c8b134-4d0c-43ad-b6ea-4be083af8919&PK_SESSAO=301194614&PK_ARQ_INFORM_DLOAD=191255'}

r = requests.post(url, data=payload)

print r.content