# 11. Faça um programa que receba um número, calcule e mostre:
# O número digitado ao quadrado
# O número digitado ao cubo
# A raiz do número digitado
# A raiz cúbica do número digitado

#entrada
numero = float(input("Digite um número: "))

#processamento
quadrado = numero ** 2
cubo = numero ** 3
raizQuadrada = numero ** (1/2)
raizCubica = numero ** (1/3)

#saída
print("O número escolhido elevado a 2 é:",quadrado)
print("O número escolhido elevado a 3 é:",cubo)
print("A raiz quadrada do número escolhido é:",raizQuadrada)
print("A raiz cúbica do número escolhido é:",raizCubica)