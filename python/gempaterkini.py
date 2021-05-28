#!/usr/bin/env python3
from requests import get
from xml.etree.ElementTree import fromstring

d = get("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml").content
for i,n in enumerate(fromstring(d).iterfind("gempa"), 1):
    print(f"""
      No : {str(i)}
  Tanggal: {n.findtext('Tanggal')}
      Jam: {n.findtext('Jam')}
 DateTime: {n.findtext('DateTime')}
Magnitudo: {n.findtext('Magnitude')}
Kedalaman: {n.findtext('Kedalaman')}
Koordinat: {n.findtext('point/coordinates')}
  Lintang: {n.findtext('Lintang')}
    Bujur: {n.findtext('Bujur')}
   Lokasi: {n.findtext('Wilayah')}
  Potensi: {n.findtext('Potensi')}""")
