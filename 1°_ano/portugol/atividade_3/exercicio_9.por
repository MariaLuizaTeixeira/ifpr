programa
{
	inclua biblioteca Texto --> tx
	
	funcao inicio()
	{
		cadeia letra
		inteiro ano
		inteiro ano_atual = 2024
		inteiro tempo = 2000

		escreva("Insira uma letra: \n")
		leia(letra)

		letra = tx.caixa_baixa(letra)

		se(letra == "a" ou letra == "e" ou letra == "i" ou letra == "o" ou letra == "u")
		{
			escreva("Essa letra é vogal.\n")
		}
		senao
		{
			escreva("Essa letra é consoante.\n")
		}
		
		escreva("\nInsira um ano: \n")
		leia(ano)

		se(ano <=0)
		{
			ano = ano_atual
		}

		se( ano % 4 == 0)
		{
			escreva("Esse ano é bissexto.")
		}
		senao 
		{
			escreva("Esse ano não é bissexto.")
		}
	}
}
