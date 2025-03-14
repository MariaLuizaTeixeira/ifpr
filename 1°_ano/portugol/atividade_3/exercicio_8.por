programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real maior1, maior_mesmo, meio, menor, primeiro, segundo, terceiro
		
		escreva("Qual o primeiro número?\n")
		leia(primeiro)
		escreva("Qual o segundo número?\n")
		leia(segundo)
		escreva("Qual o terceiro número?\n")
		leia(terceiro)
		
		se((primeiro < segundo e primeiro > terceiro) ou (primeiro < terceiro e primeiro > segundo))
		{
			meio = primeiro
		}
		senao se((segundo < primeiro e segundo > terceiro) ou (segundo < terceiro e segundo > primeiro))
		{
			meio = segundo
		}
		senao 
		{
			meio = terceiro
		}

		maior1 = mat.maior_numero(primeiro, segundo)
		maior_mesmo = mat.maior_numero(maior1, terceiro)

		maior1 = mat.menor_numero(primeiro, segundo)
		menor = mat.menor_numero(maior1, terceiro)

		se(menor + meio > maior_mesmo)
		{
			se(maior_mesmo == menor e maior_mesmo == meio e meio == menor)
			{
					escreva("Esse triângulo é equilátero.")
			}
			se(meio == menor e meio != maior_mesmo)
			{
					escreva("Esse triângulo é isóceles.")
			}
			se(maior_mesmo != menor e maior_mesmo != meio e meio != menor)
			{
					escreva("Esse triângulo é escaleno.")
			}
				
		}
		senao
		{
			escreva("Não é possível fazer esse triângulo")
		}
	}
}
