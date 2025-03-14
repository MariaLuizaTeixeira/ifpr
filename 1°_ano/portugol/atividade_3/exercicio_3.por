programa
{
	
	funcao inicio()
	{
		real dias, km, reais_dias, reais_km, total
		const inteiro reais_por_dia = 60
		const real reais_por_km = 0.15
		
		escreva("Há quantos dias o carro está sendo usado?\n")
		leia(dias)
		escreva("Quantos kilômetros o carro percorreu?\n")
		leia(km)

		reais_dias = dias * reais_por_dia
		reais_km = km * reais_por_km
		total = reais_dias + reais_km

		escreva("O total é de R$", total, ".")
	}
}
