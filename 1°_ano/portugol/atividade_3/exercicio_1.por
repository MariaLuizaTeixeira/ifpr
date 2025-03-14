programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		inteiro num1 = 2 * 4 
		inteiro num2 = 24 / 3
		
		escreva("Dizer que 2 * 4 é igual a 24 / 3 é ", num1 == num2, "\n") 

		inteiro num3 = (15 % 4)
		inteiro num4 = (19 % 6)

		escreva("Dizer que 15 % 4 é menor que 19 % 6 é ", num3 < num4, "\n")

		logico num5 = nao(2 < 5)
		logico num6 = (8 ==8)

		escreva("Dizer que não(2 < 5) é diferente de (8 == 8) é ", num5 != num6, "\n")

		logico num7 = verdadeiro
		logico num8 = falso

		escreva("Dizer que verdadeiro é igual a falso é ", num7 == num8, "\n")

		inteiro num9 = 2 * 2
		real num10 = mat.potencia(2,2)

		escreva("Dizer que 2 * 2 é igual a 2² é ", num9 == num10, "\n")

		logico num11 = verdadeiro
		logico num12 = ( (7 / 2) > 3.5)

		escreva("Dizer que verdadeiro é igual a ( (7 / 2) > 3.5) é ", num11 == num12, "\n")

		logico num13 = (mat.arredondar(2.8, 0) == 3)
		logico num14 = (mat.raiz(9, 2) == 3)

		escreva("Dizer que (mat.arredondar(2.8, 0) == 3) é igual a (mat.raiz(9, 2) == 3) é ", num13 == num14, "\n")
	}
}
