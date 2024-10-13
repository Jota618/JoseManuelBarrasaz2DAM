variable1 = "hola" #Creamos una variable
variable2 = "que tal" #Creamos la segunda variable

archivo = open("archivo.txt",'w') #Creamos un archivo txt
archivo.write(variable1+variable2) #Y escribimos las dos variables
archivo.close() #Cerramos archivo

