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
            'codigo' => 'Comp',
            'nome' => 'Banco',
            'site' => 'Site'
        ]);
        DB::table('banco')->insert([
            'codigo' => '246',
            'nome' => 'Banco ABC Brasil S.A.',
            'site' => 'www.abcbrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '299',
            'nome' => 'Banco Afinz S.A. Banco Múltiplo',
            'site' => 'afinz.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '121',
            'nome' => 'Banco Agibank S.A.',
            'site' => 'www.agibank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '025',
            'nome' => 'Banco Alfa S.A.',
            'site' => 'www.bancoalfa.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '065',
            'nome' => 'Banco Andbank (Brasil) S.A.',
            'site' => 'www.andbank-lla.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '096',
            'nome' => 'Banco B3 S.A.',
            'site' => 'www.bmfbovespa.com.br/bancobmfbovespa/'
        ]);
        DB::table('banco')->insert([
            'codigo' => '024',
            'nome' => 'Banco BANDEPE S.A.',
            'site' => 'www.santander.com.br'
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
            'codigo' => '063',
            'nome' => 'Banco Bradescard S.A.',
            'site' => 'www.ibi.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '036',
            'nome' => 'Banco Bradesco BBI S.A.',
            'site' => 'Não possui site'
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
            'codigo' => '040',
            'nome' => 'Banco Cargill S.A.',
            'site' => 'www.bancocargill.com.br'
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
            'codigo' => '',
            'nome' => 'Banco CNH Industrial Capital S.A.',
            'site' => 'www.cnhindustrialcapital.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '756',
            'nome' => 'Banco Cooperativo Sicoob S.A.',
            'site' => 'www.Sicoob.com.br'
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
            'codigo' => '',
            'nome' => 'Banco CSF S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '003',
            'nome' => 'Banco da Amazônia S.A.',
            'site' => 'www.bancoamazonia.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '083',
            'nome' => 'Banco da China Brasil S.A.',
            'site' => 'www.boc-brazil.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '707',
            'nome' => 'Banco Daycoval S.A.',
            'site' => 'www.daycoval.com.br'
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
            'codigo' => '001',
            'nome' => 'Banco do Brasil S.A.',
            'site' => 'www.bb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '047',
            'nome' => 'Banco do Estado de Sergipe S.A.',
            'site' => 'www.banese.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '037',
            'nome' => 'Banco do Estado do Pará S.A.',
            'site' => 'www.banpara.b.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '041',
            'nome' => 'Banco do Estado do Rio Grande do Sul S.A.',
            'site' => 'www.banrisul.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '004',
            'nome' => 'Banco do Nordeste do Brasil S.A.',
            'site' => 'www.banconordeste.gov.br'
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
            'codigo' => '094',
            'nome' => 'Banco Finaxis S.A.',
            'site' => 'www.bancofinaxis.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '125',
            'nome' => 'Banco Genial S.A.',
            'site' => 'www.bancogenial.com'
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
            'nome' => 'Banco IBM S.A.',
            'site' => 'www.ibm.com/financing/br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '012',
            'nome' => 'Banco Inbursa S.A.',
            'site' => 'www.bancoinbursa.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '604',
            'nome' => 'Banco Industrial do Brasil S.A.',
            'site' => 'www.bancoindustrial.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '077',
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
            'codigo' => '029',
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
            'codigo' => '376',
            'nome' => 'Banco J. P. Morgan S.A.',
            'site' => 'www.jpmorgan.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '074',
            'nome' => 'Banco J. Safra S.A.',
            'site' => 'www.safra.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '217',
            'nome' => 'Banco John Deere S.A.',
            'site' => 'www.johndeere.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '630',
            'nome' => 'Banco Letsbank S.A.',
            'site' => 'www.letsbank.com.br'
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
            'codigo' => '389',
            'nome' => 'Banco Mercantil do Brasil S.A.',
            'site' => 'www.mercantil.com.br'
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
            'codigo' => '066',
            'nome' => 'Banco Morgan Stanley S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '456',
            'nome' => 'Banco MUFG Brasil S.A.',
            'site' => 'www.br.bk.mufg.jp'
        ]);
        DB::table('banco')->insert([
            'codigo' => '212',
            'nome' => 'Banco Original S.A.',
            'site' => 'www.original.com.br'
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
            'codigo' => '747',
            'nome' => 'Banco Rabobank International Brasil S.A.',
            'site' => 'www.rabobank.com.br'
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
            'codigo' => '033',
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
            'codigo' => '366',
            'nome' => 'Banco Société Générale Brasil S.A.',
            'site' => 'www.sgbrasil.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '464',
            'nome' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
            'site' => 'www.smbcgroup.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '082',
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
            'codigo' => '348',
            'nome' => 'Banco XP S.A.',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '',
            'nome' => 'Banco Yamaha Motor do Brasil S.A.',
            'site' => 'www.yamaha-motor.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '021',
            'nome' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
            'site' => 'www.banestes.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '755',
            'nome' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.',
            'site' => 'www.ml.com'
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
            'codigo' => '017',
            'nome' => 'BNY Mellon Banco S.A.',
            'site' => 'www.bnymellon.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '070',
            'nome' => 'BRB - Banco de Brasília S.A.',
            'site' => 'www.brb.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '104',
            'nome' => 'Caixa Econômica Federal',
            'site' => 'www.caixa.gov.br'
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
            'codigo' => '487',
            'nome' => 'Deutsche Bank S.A. - Banco Alemão',
            'site' => 'www.deutsche-bank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '062',
            'nome' => 'Hipercard Banco Múltiplo S.A.',
            'site' => 'www.hipercard.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '269',
            'nome' => 'HSBC Brasil S.A. - Banco de Investimento',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '341',
            'nome' => 'Itaú Unibanco S.A.',
            'site' => 'www.itau.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '488',
            'nome' => '"JPMorgan Chase Bank, National Association"',
            'site' => 'www.jpmorganchase.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '399',
            'nome' => 'Kirton Bank S.A. - Banco Múltiplo',
            'site' => ''
        ]);
        DB::table('banco')->insert([
            'codigo' => '128',
            'nome' => 'MS Bank S.A. Banco de Câmbio',
            'site' => 'www.msbank.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '254',
            'nome' => 'Paraná Banco S.A.',
            'site' => 'www.paranabanco.com.br'
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
            'codigo' => '014',
            'nome' => 'State Street Brasil S.A. - Banco Comercial',
            'site' => 'www.statestreet.com'
        ]);
        DB::table('banco')->insert([
            'codigo' => '095',
            'nome' => 'Travelex Banco de Câmbio S.A.',
            'site' => 'www.bancoconfidence.com.br'
        ]);
        DB::table('banco')->insert([
            'codigo' => '129',
            'nome' => 'UBS Brasil Banco de Investimento S.A.',
            'site' => 'www.ubs.com'
        ]);
    }
}
