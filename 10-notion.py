import http.client
import json

conn = http.client.HTTPSConnection("api.notion.com")
payload = json.dumps({
  "sorts": [
    {
      "property": "Name",
      "direction": "ascending"
    }
  ]
})
headers = {
  'Authorization': 'Bearer *************',
  'Content-Type': 'application/json',
  'Notion-Version': '2022-02-22',
  'Cookie': '__cf_bm=DnS_yqpWkjlidZ67ZzkTOMAKcwywe.SbtWDJ8DK3PNA-1726726642-1.0.1.1-Df0R23f3OJHd3rW70jSepb3HMuInwPKcbnw.2qpAksdoRPYjjItstki5zq4t0IzJ58iX2VAQ7TfZmWeRMXLaQw; _cfuvid=bsd50m2xAXIE18CIaCJ7bG16.IBT_k0l5mAuaniv6Ok-1726726642425-0.0.1.1-604800000'
}
conn.request("POST", "/v1/databases/99fe4ba7a31745ac9c762c250ed5c003/query", payload, headers)
res = conn.getresponse()
data = res.read()
print(data.decode("utf-8"))
