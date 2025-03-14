programa
{
	
	funcao inicio()
	{
		inteiro anos, horas // variáveis a)
		escreva("Quantos anos você quer calcular?\n") // pergunta
		leia(anos)

		horas = anos * 8760 // calcula quantas horas tem no ano desejado, 8760 sendo o número de horas em um ano (24x365)
		
		se(anos == 1.) // diferencia se é só um ano ou mais, se for mais anos a frase muda, fica no plural
		{
			escreva(anos, " ano tem ", horas, " horas.")
		}
		senao
		{
			escreva(anos, " anos têm ", horas, " horas.")
		}	
	}
}
