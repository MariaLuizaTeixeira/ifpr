programa
{
	
	funcao inicio()
	{
		real idade, idade_segundos

		escreva("Quantos anos você tem?\n")
		leia(idade)

		idade_segundos = idade * 60*60*24*365  // a idade em segundos é definida pela idade vezes o número de segundos em um ano

		escreva("A sua idade em segundos é de", idade_segundos, "segundos.")
	}
}
