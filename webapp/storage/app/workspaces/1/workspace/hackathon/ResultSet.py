import pandas as pd

class ResultSet:
    
    
    def __init__(self, response):
        self.re = response
        pass

    

    def toDataframe(self):
        df = pd.DataFrame(self.re.json().get("result").get("records"))
        return df
    