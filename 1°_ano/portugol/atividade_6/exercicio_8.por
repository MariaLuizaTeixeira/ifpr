programa
{
	
	funcao inicio()
	{
		questao_8 ()
	}

	funcao questao_8 ()
	{
		inteiro numero, quantidade
		inteiro soma = 0
		inteiro maior = 0
		inteiro menor = 1

		escreva("Insira a quantidade de números a serem digitados:\n")
		leia(quantidade)

		para(inteiro i=0; i < quantidade; i++)
		{
			escreva("Insira um número:\n")
			leia(numero)

			soma = soma + numero
			se(numero > maior)
			{
				maior = numero
			}

			se(numero < menor)
			{
				menor = numero
			}
		}
		
		escreva("Dos ", quantidade, " números digitados ", maior, " é o maior, ", menor, " é o menor e ", soma, " é a soma.")
	}
}
