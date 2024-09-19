import http.client
import json

conn = http.client.HTTPSConnection("api.notion.com")
payload = json.dumps({
  "filter": {
    "property": "Tipo",
    "multi_select": {
      "contains": "Moodle"
    }
  },
  "sorts": [
    {
      "property": "Name",
      "direction": "ascending"
    }
  ]
})
headers = {
  'Authorization': 'Bearer secret_vO7nwV1IHxSW4r8rpUjI6Uh210cjgFlvIy4R9dUQdE2',
  'Content-Type': 'application/json',
  'Notion-Version': '2022-02-22',
  'Cookie': '__cf_bm=6cJZhF6.lstFDT_f3nEkVP8wj7JJ4rydAdKAZiWUIkQ-1726742558-1.0.1.1-.a0EVYRmDYo23CtwdfIKIR8Qr6vD3FfSLV9uMOW7rT9cNuktSIe6kvdkYgFDMPVh_Y70alXZ5wYMphcccbTDGA; _cfuvid=lTAl9RJua2uYCiURNmBfRoYDLcHDUOp_8KwiDIHLO1s-1726738594575-0.0.1.1-604800000'
}
conn.request("POST", "/v1/databases/deda4dba7a9648f49f0bc0665a558da5/query", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))