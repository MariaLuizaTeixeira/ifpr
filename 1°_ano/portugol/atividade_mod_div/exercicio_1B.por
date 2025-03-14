programa
{
	
	funcao inicio()
	{
		inteiro decadas, minutos
		escreva("Quantas décadas você quer calcular?\n") // pergunta
		leia(decadas)

		minutos = decadas * 5256000 // calcula quantas horas tem no ano desejado, 5.256.600 = 60x24x365x10)
		
		se(decadas == 1) // diferencia se é só uma década ou mais, se for mais de uma década a frase muda, fica no plural
		{
			escreva(decadas, " década tem ", minutos, " minutos.")
		}
		senao
		{
			escreva(decadas, " décadas têm ", minutos, " minutos.")
		}
	}
}
