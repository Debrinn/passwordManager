import random
import json
import time
def generate_pw():
    taille=22
    mdp=[]
    for k in range(taille):
        lettre = random.randint(33,126)
        if chr(lettre)!="'":
            mdp.append(chr(lettre))
    mdp1= ''.join(mdp)
    #print(mdp1)
    return mdp1
#en json
log={"netflix":{"name":"test","password":"test1"}}
"""
with open("account.json","w") as json_data:
    #data_account = json.load(json_data)
    json.dump(log,json_data)
"""
#code
fich_temp = open("addTempo.txt",'r')

tempo_safe=(fich_temp.read()).split("/")
fich_temp.close()
while True:
    fich_temp= open('addTempo.txt','r')#fichier compte, temporaire
    tempo=(fich_temp.read()).split(" ")
    fich_temp.close()
    if tempo != tempo_safe:
        
        if tempo[2]=="0":
            tempo[2]=generate_pw()

        with open('account.json') as json_data:
            data_account = json.load(json_data)
            #print(data_account)
        #print(tempo)
        data_account[tempo[0]] = {"identifiant":tempo[1],"password":tempo[2],"url":tempo[3]}
        with open("account.json","w") as json_data:
            json.dump(data_account,json_data)
        fich_temp = open('addTempo.txt','w')
        fich_temp.write(' '.join(tempo))
        fich_temp.close()

    tempo_safe=tempo
    time.sleep(4)
    