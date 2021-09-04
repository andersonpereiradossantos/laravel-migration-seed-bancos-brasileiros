<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Administradora de Consórcios Sicredi LTDA',
            'site' => 'www.sicredi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Agoracred S/A Sociedade de Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '246',
            'nome' => 'Banco ABC Brasil S.A.',
            'site' => 'www.abcbrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '75',
            'nome' => 'Banco ABN AMRO S.A.',
            'site' => 'www.abnamro.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '121',
            'nome' => 'Banco Agibank S.A.',
            'site' => 'www.agibank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Alfa de Investimentos S.A.',
            'site' => 'www.alfanet.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '25',
            'nome' => 'Banco Alfa S.A.',
            'site' => 'www.bancoalfa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '641',
            'nome' => 'Banco Alvorada S.A.',
            'site' => 'Não possui site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '65',
            'nome' => 'Banco Andbank (Brasil) S.A.',
            'site' => 'www.andbank-lla.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '213',
            'nome' => 'Banco Arbi S.A.',
            'site' => 'www.arbi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '96',
            'nome' => 'Banco B3 S.A.',
            'site' => 'www.bmfbovespa.com.br/bancobmfbovespa/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '24',
            'nome' => 'Banco BANDEPE S.A.',
            'site' => 'www.santander.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '330',
            'nome' => 'Banco Bari de Investimentos e Financiamentos S/A',
            'site' => 'www.bancobari.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '318',
            'nome' => 'Banco BMG S.A.',
            'site' => 'www.bancobmg.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '752',
            'nome' => 'Banco BNP Paribas Brasil S.A.',
            'site' => 'www.bnpparibas.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '107',
            'nome' => 'Banco BOCOM BBM S.A.',
            'site' => 'www.bancobbm.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '63',
            'nome' => 'Banco Bradescard S.A.',
            'site' => 'www.ibi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '36',
            'nome' => 'Banco Bradesco BBI S.A.',
            'site' => 'Não possui site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '122',
            'nome' => 'Banco Bradesco BERJ S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '204',
            'nome' => 'Banco Bradesco Cartões S.A.',
            'site' => 'não tem site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '394',
            'nome' => 'Banco Bradesco Financiamentos S.A.',
            'site' => 'não tem site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '237',
            'nome' => 'Banco Bradesco S.A.',
            'site' => 'www.bradesco.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '218',
            'nome' => 'Banco BS2 S.A.',
            'site' => 'www.bs2.com/banco/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '208',
            'nome' => 'Banco BTG Pactual S.A.',
            'site' => 'www.btgpactual.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '626',
            'nome' => 'Banco C6 Consignado S.A.',
            'site' => 'https://www.c6consig.com.br/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco C6 S.A.',
            'site' => 'https://www.c6bank.com/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '473',
            'nome' => 'Banco Caixa Geral - Brasil S.A.',
            'site' => 'www.bcgbrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '412',
            'nome' => 'Banco Capital S.A.',
            'site' => 'www.bancocapital.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '40',
            'nome' => 'Banco Cargill S.A.',
            'site' => 'www.bancocargill.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Caterpillar S.A.',
            'site' => 'www.catfinancial.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '266',
            'nome' => 'Banco Cédula S.A.',
            'site' => 'www.bancocedula.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Central do Brasil',
            'site' => 'www.bcb.gov.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '739',
            'nome' => 'Banco Cetelem S.A.',
            'site' => 'www.cetelem.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '233',
            'nome' => 'Banco Cifra S.A.',
            'site' => 'www.bancocifra.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '745',
            'nome' => 'Banco Citibank S.A.',
            'site' => 'www.citibank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '241',
            'nome' => 'Banco Clássico S.A.',
            'site' => 'www.bancoclassico.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco CNH Industrial Capital S.A.',
            'site' => 'www.cnhindustrialcapital.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '756',
            'nome' => 'Banco Cooperativo do Brasil S.A. - BANCOOB',
            'site' => 'www.bancoob.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '748',
            'nome' => 'Banco Cooperativo Sicredi S.A.',
            'site' => 'www.sicredi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '222',
            'nome' => 'Banco Credit Agricole Brasil S.A.',
            'site' => 'www.calyon.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '505',
            'nome' => 'Banco Credit Suisse (Brasil) S.A.',
            'site' => 'www.csfb.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '69',
            'nome' => 'Banco Crefisa S.A.',
            'site' => 'www.crefisa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco CSF S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '3',
            'nome' => 'Banco da Amazônia S.A.',
            'site' => 'www.bancoamazonia.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '83',
            'nome' => 'Banco da China Brasil S.A.',
            'site' => 'www.boc-brazil.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '707',
            'nome' => 'Banco Daycoval S.A.',
            'site' => 'www.daycoval.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '51',
            'nome' => 'Banco de Desenvolvimento do Espírito Santo S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco de Investimento Credit Suisse (Brasil) S.A.',
            'site' => 'www.csfb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '300',
            'nome' => 'Banco de La Nacion Argentina',
            'site' => 'www.bna.com.ar'
        ]);
        DB::table('banco')->insert([
            'codigo' => '495',
            'nome' => 'Banco de La Provincia de Buenos Aires',
            'site' => 'www.bapro.com.ar'
        ]);
        DB::table('banco')->insert([
            'codigo' => '494',
            'nome' => 'Banco de La Republica Oriental del Uruguay',
            'site' => 'www.bancorepublica.com.uy'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco de Lage Landen Brasil S.A.',
            'site' => 'www.dllgroup.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '654',
            'nome' => 'Banco Digimais S.A.',
            'site' => 'www.bancodigimais.com.br/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Digio S.A.',
            'site' => 'www.aebb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '1',
            'nome' => 'Banco do Brasil S.A.',
            'site' => 'www.bb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '47',
            'nome' => 'Banco do Estado de Sergipe S.A.',
            'site' => 'www.banese.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '37',
            'nome' => 'Banco do Estado do Pará S.A.',
            'site' => 'www.banpara.b.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '41',
            'nome' => 'Banco do Estado do Rio Grande do Sul S.A.',
            'site' => 'www.banrisul.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '4',
            'nome' => 'Banco do Nordeste do Brasil S.A.',
            'site' => 'www.banconordeste.gov.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '265',
            'nome' => 'Banco Fator S.A.',
            'site' => 'www.fator.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '224',
            'nome' => 'Banco Fibra S.A.',
            'site' => 'www.bancofibra.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Fidis S.A.',
            'site' => 'www.bancofidis.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '94',
            'nome' => 'Banco Finaxis S.A.',
            'site' => 'www.bancofinaxis.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Ford S.A.',
            'site' => 'www.bancoford.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco GM S.A.',
            'site' => 'www.chevroletsf.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '612',
            'nome' => 'Banco Guanabara S.A.',
            'site' => 'www.bancoguanabara.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Honda S.A.',
            'site' => 'www.bancohonda.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco IBM S.A.',
            'site' => 'www.ibm.com/financing/br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '12',
            'nome' => 'Banco Inbursa S.A.',
            'site' => 'www.bancoinbursa.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '604',
            'nome' => 'Banco Industrial do Brasil S.A.',
            'site' => 'www.bancoindustrial.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '77',
            'nome' => 'Banco Inter S.A.',
            'site' => 'www.bancointer.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '249',
            'nome' => 'Banco Investcred Unibanco S.A.',
            'site' => 'Não possui site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '184',
            'nome' => 'Banco Itaú BBA S.A.',
            'site' => 'www.itaubba.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '29',
            'nome' => 'Banco Itaú Consignado S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Itaú Veículos S.A.',
            'site' => 'www.bancofiat.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '479',
            'nome' => 'Banco ItauBank S.A',
            'site' => 'www.itaubank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Itaucard S.A.',
            'site' => 'www.itau.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Itauleasing S.A.',
            'site' => 'www.itau.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '376',
            'nome' => 'Banco J. P. Morgan S.A.',
            'site' => 'www.jpmorgan.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '74',
            'nome' => 'Banco J. Safra S.A.',
            'site' => 'www.safra.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '217',
            'nome' => 'Banco John Deere S.A.',
            'site' => 'www.johndeere.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '76',
            'nome' => 'Banco KDB S.A.',
            'site' => 'www.bancokdb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '757',
            'nome' => 'Banco KEB HANA do Brasil S.A.',
            'site' => 'www.bancokeb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Komatsu S.A.',
            'site' => 'www.bancokomatsu.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Losango S.A. - Banco Múltiplo',
            'site' => 'www.losango.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '600',
            'nome' => 'Banco Luso Brasileiro S.A.',
            'site' => 'www.lusobrasileiro.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '243',
            'nome' => 'Banco Master S.A.',
            'site' => 'www.bancomaster.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Mercantil de Investimentos S.A.',
            'site' => 'www.mercantil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '389',
            'nome' => 'Banco Mercantil do Brasil S.A.',
            'site' => 'www.mercantil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Mercedes-Benz do Brasil S.A.',
            'site' => 'www.bancomercedesbenz.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '370',
            'nome' => 'Banco Mizuho do Brasil S.A.',
            'site' => 'www.mizuhobank.com/brazil/pt/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '746',
            'nome' => 'Banco Modal S.A.',
            'site' => 'www.bancomodal.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Moneo S.A.',
            'site' => 'www.bancomoneo.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '66',
            'nome' => 'Banco Morgan Stanley S.A.',
            'site' => 'www.morganstanley.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '456',
            'nome' => 'Banco MUFG Brasil S.A.',
            'site' => 'www.br.bk.mufg.jp'
        ]);
        DB::table('banco')->insert([
            'codigo' => '7',
            'nome' => 'Banco Nacional de Desenvolvimento Econômico e Social - BNDES',
            'site' => 'www.bndes.gov.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '169',
            'nome' => 'Banco Olé Bonsucesso Consignado S.A.',
            'site' => 'www.oleconsignado.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '79',
            'nome' => 'Banco Original do Agronegócio S.A.',
            'site' => 'www.original.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '212',
            'nome' => 'Banco Original S.A.',
            'site' => 'www.original.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '712',
            'nome' => 'Banco Ourinvest S.A.',
            'site' => 'www.ourinvest.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '623',
            'nome' => 'Banco PAN S.A.',
            'site' => 'www.bancopan.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '611',
            'nome' => 'Banco Paulista S.A.',
            'site' => 'www.bancopaulista.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '643',
            'nome' => 'Banco Pine S.A.',
            'site' => 'www.pine.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '658',
            'nome' => 'Banco Porto Real de Investimentos S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco PSA Finance Brasil S.A.',
            'site' => 'www.bancopsa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '747',
            'nome' => 'Banco Rabobank International Brasil S.A.',
            'site' => 'www.rabobank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Randon S.A.',
            'site' => 'www.bancorandon.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco RCI Brasil S.A.',
            'site' => 'www.bancorenault.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '633',
            'nome' => 'Banco Rendimento S.A.',
            'site' => 'www.rendimento.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '741',
            'nome' => 'Banco Ribeirão Preto S.A.',
            'site' => 'www.brp.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '720',
            'nome' => 'BANCO RNX S.A',
            'site' => 'www.bancomaxinvest.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '120',
            'nome' => 'Banco Rodobens S.A.',
            'site' => 'www.rodobens.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '422',
            'nome' => 'Banco Safra S.A.',
            'site' => 'www.safra.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '33',
            'nome' => 'Banco Santander  (Brasil)  S.A.',
            'site' => 'www.santander.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '743',
            'nome' => 'Banco Semear S.A.',
            'site' => 'www.bancosemear.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '276',
            'nome' => 'Banco Senff S.A.',
            'site' => 'https://www.senff.com.br/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '754',
            'nome' => 'Banco Sistema S.A.',
            'site' => 'www.btgpactual.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '630',
            'nome' => 'Banco Smartbank S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '366',
            'nome' => 'Banco Société Générale Brasil S.A.',
            'site' => 'www.sgbrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '637',
            'nome' => 'Banco Sofisa S.A.',
            'site' => 'www.sofisa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '299',
            'nome' => 'Banco Sorocred S.A. - Banco Múltiplo (AFINZ)',
            'site' => 'afinz.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '464',
            'nome' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
            'site' => 'www.smbcgroup.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '82',
            'nome' => 'Banco Topázio S.A.',
            'site' => 'www.bancotopazio.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Toyota do Brasil S.A.',
            'site' => 'www.bancotoyota.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '634',
            'nome' => 'Banco Triângulo S.A.',
            'site' => 'www.tribanco.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '18',
            'nome' => 'Banco Tricury S.A.',
            'site' => 'www.bancotricury.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Vipal S.A.',
            'site' => 'www.bancovipal.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '653',
            'nome' => 'Banco Voiter S.A.',
            'site' => 'www.voiter.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Volkswagen S.A.',
            'site' => 'www.bancovw.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Volvo Brasil S.A.',
            'site' => 'Não possui site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '655',
            'nome' => 'Banco Votorantim S.A.',
            'site' => 'www.bancovotorantim.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '610',
            'nome' => 'Banco VR S.A.',
            'site' => 'www.vrinvestimentos.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '119',
            'nome' => 'Banco Western Union do Brasil S.A.',
            'site' => 'www.bancowesternunion.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '124',
            'nome' => 'Banco Woori Bank do Brasil S.A.',
            'site' => 'www.wooribank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '102',
            'nome' => 'Banco XP S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Yamaha Motor do Brasil S.A.',
            'site' => 'www.yamaha-motor.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '81',
            'nome' => 'BancoSeguro S.A.',
            'site' => 'www.rendimento.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '21',
            'nome' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
            'site' => 'www.banestes.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '755',
            'nome' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.',
            'site' => 'www.ml.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'BB Banco de Investimento S.A.',
            'site' => 'www.bb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '250',
            'nome' => 'BCV - Banco de Crédito e Varejo S.A.',
            'site' => 'www.bancobcv.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '144',
            'nome' => 'BEXS Banco de Câmbio S.A.',
            'site' => 'www.bexs.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'BMW Financeira S.A. - Crédito, Financiamento e Investimento',
            'site' => 'www.bmwfs.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '17',
            'nome' => 'BNY Mellon Banco S.A.',
            'site' => 'www.bnymellon.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '126',
            'nome' => 'BR Partners Banco de Investimento S.A.',
            'site' => 'www.brap.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '70',
            'nome' => 'BRB - Banco de Brasília S.A.',
            'site' => 'www.brb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '92',
            'nome' => 'Brickell S.A. Crédito, Financiamento e Investimento',
            'site' => 'www.brickellcfi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'BRK S.A. Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'BV Financeira S.A. - Crédito, Financiamento e Investimento',
            'site' => 'www.bvfinanceira.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '104',
            'nome' => 'Caixa Econômica Federal',
            'site' => 'www.caixa.gov.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Caruana S.A. - Sociedade de Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'CCB Brasil S.A. - Crédito, Financiamentos e Investimentos',
            'site' => 'www.sulfinanceira.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Central das Cooperativas de Crédito do Estado de São Paulo - SICOOB CENTRAL CECRESP',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '114-7',
            'nome' => 'Central das Cooperativas de Economia e Crédito Mútuo do Estado do Espírito Santo Ltda.',
            'site' => 'www.cecoop.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '320',
            'nome' => 'China Construction Bank (Brasil) Banco Múltiplo S.A.',
            'site' => 'www.br.ccb.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '477',
            'nome' => 'Citibank N.A.',
            'site' => 'www.citibank.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '163',
            'nome' => 'Commerzbank Brasil S.A. - Banco Múltiplo',
            'site' => 'www.commerzbank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '85',
            'nome' => 'Cooperativa Central de Crédito - AILOS',
            'site' => 'www.ailos.coop.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '97',
            'nome' => 'Cooperativa Central de Crédito Noroeste Brasileiro Ltda.',
            'site' => 'www.credisis.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '090-2',
            'nome' => 'Cooperativa Central de Economia e Crédito Mutuo - SICOOB UNIMAIS',
            'site' => 'www.sicoobunimais.com/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '087-6',
            'nome' => 'Cooperativa Central de Economia e Crédito Mútuo das Unicreds de Santa Catarina e Paraná',
            'site' => 'www.unicred.com.br/centralscpr/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '089-2',
            'nome' => 'Cooperativa de Crédito Rural da Região da Mogiana',
            'site' => 'www.credisan.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '098-1',
            'nome' => 'CREDIALIANÇA COOPERATIVA DE CRÉDITO RURAL',
            'site' => 'www.credialianca.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Credicoamo Crédito Rural Cooperativa',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Credjust - Cooperativa de Crédito Mútuo dos Integrantes da Justiça da 13ª Região LTDA.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Dacasa Financeira S.A.-Soc. de Créd. Financ. e Investimento',
            'site' => 'www.dacasa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Daycoval Leasing - Banco Múltiplo S.A.',
            'site' => 'www.daycoval.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '487',
            'nome' => 'Deutsche Bank S.A. - Banco Alemão',
            'site' => 'www.deutsche-bank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Facta Financeira S.A. - Crédito Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Finamax S.A. - Crédito, Financiamento e Investimento',
            'site' => 'www.finamax.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '64',
            'nome' => 'Goldman Sachs do Brasil Banco Múltiplo S.A.',
            'site' => 'www.goldmansachs.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '78',
            'nome' => 'Haitong Banco de Investimento do Brasil S.A.',
            'site' => 'www.haitongib.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '62',
            'nome' => 'Hipercard Banco Múltiplo S.A.',
            'site' => 'www.hipercard.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'HS Financeira S/A Crédito, Financiamento e Investimentos',
            'site' => 'www.hsfinanceira.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '269',
            'nome' => 'HSBC Brasil S.A. - Banco de Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '132',
            'nome' => 'ICBC do Brasil Banco Múltiplo S.A.',
            'site' => 'www.icbcbr.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '492',
            'nome' => 'ING Bank N.V.',
            'site' => 'www.ing.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '139',
            'nome' => 'Intesa Sanpaolo Brasil S.A. - Banco Múltiplo',
            'site' => 'www.intesasanpaolobrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '652',
            'nome' => 'Itaú Unibanco Holding S.A.',
            'site' => 'www.itau.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '341',
            'nome' => 'Itaú Unibanco S.A.',
            'site' => 'www.itau.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'J. Malucelli Distribuidora de Títulos e Valores Mobiliários LTDA.',
            'site' => 'www.paranaasset.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '488',
            'nome' => 'JPMorgan Chase Bank, National Association',
            'site' => 'www.jpmorganchase.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '399',
            'nome' => 'Kirton Bank S.A. - Banco Múltiplo',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Lecca Crédito, Financiamento e Investimento S/A',
            'site' => 'www.lecca.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '128',
            'nome' => 'MS Bank S.A. Banco de Câmbio',
            'site' => 'www.msbank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '753',
            'nome' => 'Novo Banco Continental S.A. - Banco Múltiplo',
            'site' => 'www.nbcbank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '613',
            'nome' => 'Omni Banco S.A.',
            'site' => 'www.bancopecunia.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Omni SA Crédito Financiamento Investimento',
            'site' => 'www.omni.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '254',
            'nome' => 'Paraná Banco S.A.',
            'site' => 'www.paranabanco.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Parati - Crédito Financiamento e Investimento S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Pernambucanas Financiadora S.A. - Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Pine Investimentos Distribuidoras de Títulos e Valores Mobiliários LTDA',
            'site' => 'www.bancopine.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '125',
            'nome' => 'Plural S.A. - Banco Múltiplo',
            'site' => 'www.brasilplural.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Portocred S.A. - Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'PortoSeg S.A. - Crédito, Financiamento e Investimento',
            'site' => 'www.portofinanciamento.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Redecard S.A.',
            'site' => 'www.userede.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Santana S.A. - Crédito, Financiamento e Investimento',
            'site' => 'www.santana-shopcred.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Santinvest S.A - Crédito, Financiamento e Investimentos',
            'site' => 'www.santinvest.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Sax S.A. - Crédito, Financiamento e Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Scania Banco S.A.',
            'site' => 'www.scaniabanco.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '751',
            'nome' => 'Scotiabank Brasil S.A. Banco Múltiplo',
            'site' => 'www.br.scotiabank.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Sorocred Crédito, Financiamento e Investimento S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '118',
            'nome' => 'Standard Chartered Bank (Brasil) S/A–Bco Invest.',
            'site' => 'www.standardchartered.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '14',
            'nome' => 'State Street Brasil S.A. - Banco Comercial',
            'site' => 'www.br.natixis.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '95',
            'nome' => 'Travelex Banco de Câmbio S.A.',
            'site' => 'www.bancoconfidence.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '129',
            'nome' => 'UBS Brasil Banco de Investimento S.A.',
            'site' => 'www.ubs.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '091-4',
            'nome' => 'Unicred Central do Rio Grande do Sul',
            'site' => 'www.unicred-rs.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'UNIPRIME Central - Central Interestadual de Cooperativas de Crédito Ltda.',
            'site' => 'www.uniprimecentral.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '84',
            'nome' => 'Uniprime Norte do Paraná - Coop de Economia e Crédito Mútuo dos Médicos, Profissionais das Ciências',
            'site' => 'www.uniprimebr.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Volvo Administradora de Consórcio LTDA.',
            'site' => 'www.volvo.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '359',
            'nome' => 'Zema Credito, Financiamento e Investimento S.A.',
            'site' => 'www.zemafinanceira.com'
        ]);      
    }
}
