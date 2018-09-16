import requests
import pandas as pd
#import ResultSet
from ResultSet import ResultSet


class Opendata:
    current = ""
    user_agent = 'hackathon/1.0 (+https://data-fizz.com)'
   
        
    def __init__(self, cat):
        self.catalog = cat
        self.data = pd.read_json('data.json').get('dataset').tolist()
        
        pass

    
    def getResource(self,url):
        response = requests.get(url)
        return ResultSet(response)
    
    
    def torec(self,d):
    
        d2 = { your_key: d[your_key] for your_key in ['distribution','title','theme'] }
        d3 = {}
        for key, value in d2.items():
        #    li = []
            if key in ['distribution']:
                li = []
                for dist in value:
                    ds = { your_key: dist[your_key] for your_key in ['downloadURL','title','format'] }
                    li.append(ds) 
                d3[key] = li        
            else:
                d3[key] = value    
                
        d4 = [None] * len(d3.get('distribution'))
        i=0
        for dist in d3.get('distribution'):
            d4[i] = { your_key: d3[your_key] for your_key in ['theme','title'] }
            d4[i]['resource_title'] = dist.get('title')
            d4[i]['downloadURL'] = dist.get('downloadURL')
            d4[i]['format'] = dist.get('format')
            i=i+1
        return d4

    def getDatasets(self):
        l1 = [None] * len(self.data[1:10])
        i=0
        for l in self.data[1:10]:
            l1[i] = self.torec(self.data[i])
            i=i+1
        l2 = [item for sublist in l1 for item in sublist]
        return pd.DataFrame(l2)
    
