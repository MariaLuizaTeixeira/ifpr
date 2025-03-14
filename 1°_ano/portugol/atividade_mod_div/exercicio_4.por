programa
{
	
	funcao inicio()
	{
		inteiro tamanho_tabua, tamanho_pedacos, resto
		
		escreva("Quantos metros tem a tábua a ser cortada?\n")
		leia(tamanho_tabua)

		tamanho_pedacos = (tamanho_tabua * 100) / 45
		resto = (tamanho_tabua * 100) % 45

		escreva("Se você usar uma tábua de ", tamanho_tabua, " metros, cada pedaço terá ", tamanho_pedacos, " centímetros e sobrará ", resto, " centímetros.")
	}
}
