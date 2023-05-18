create database Huawei;
show databases;
use huawei;

create table Personal_Administracion(PuestoAdmon varchar(25) not null primary key,NomPersonalAdmon varchar(100) not null);

INSERT INTO Personal_Administracion (PuestoAdmon,NomPersonalAdmon) VALUES ('Coordinador de Recursos Humanos', 'David Johnson');

create table Socios (NumIdenSoc int not null primary key,APSoc varchar(25) not null, AMSoc varchar(25) not null, NomSoc varchar(50) not null,
FechaNacSoc date not null, ColoniaSoc varchar(25) not null,CalleSoc varchar(25) not null, NumExtSoc int not null, NumIntSoc int,EstadoSoc varchar(25) not null, 
CiudadSoc varchar(25) not null,CodPosSoc varchar(25) not null, NacSoc varchar(25) not null, CurpSoc varchar(18) not null, RfcSoc varchar(13) not null, PaisNac varchar(25) not null,
EtniaSoc varchar (25), antecendentesSoc varchar(100) not null,TelFijoSoc int not null,TelMovSoc int not null,CorreoSoc int not null,Emer1NomSoc varchar(100) not null,
Emer1ParenSoc varchar(25) not null,Emer1TelSoc int not null,Emer2NomSoc varchar(100) not null,Emer2ParenSoc varchar(25) not null,Emer2TelSoc int not null,EstCivilSoc varchar(25),
HijosSoc int not null,NumSegSoc int  not null, TipoSangreSoc varchar(3)  not null,EnferCronicasSoc varchar(150) not null,AlergiaSoc varchar(150) not null,
SedeSoc varchar(50)  not null,UltimaEmpSoc varchar(50) not null,TiempoLabSoc varchar(20) not null, UltimoGradoSoc varchar(50) not null,IdiomasSoc varchar(150) not null, 
CertifSoc varchar(150) not null,DocPropSoc varchar(150) not null,EmpInvSoc varchar(150) not null,EmpSoc varchar(150) not null,HistCred varchar(100) not null,LugarAdmon varchar(25) not null,
foreign key(LugarAdmon) references Personal_Administracion(PuestoAdmon)on delete cascade on update cascade);

/*INSERT INTO Socios (NumIdenSoc, APSoc, AMSoc, NomSoc, FechaNacSoc, ColoniaSoc, CalleSoc, NumExtSoc, NumIntSoc, EstadoSoc, CiudadSoc, CodPosSoc, NacSoc, CurpSoc, RfcSoc, PaisNac, EtniaSoc, antecendentesSoc, TelFijoSoc, TelMovSoc, CorreoSoc, Emer1NomSoc, Emer1ParenSoc, Emer1TelSoc, Emer2NomSoc, Emer2ParenSoc, Emer2TelSoc, EstCivilSoc, HijosSoc, NumSegSoc, TipoSangreSoc, EnferCronicasSoc, AlergiaSoc, SedeSoc, UltimaEmpSoc, TiempoLabSoc, UltimoGradoSoc, IdiomasSoc, CertifSoc, DocPropSoc, EmpInvSoc, EmpSoc, HistCred, LugarAdmon)
VALUES (1234567890, 'ApellidoPaterno', 'ApellidoMaterno', 'NombreSocio', '1990-01-01', 'Colonia Ejemplo', 'Calle Ejemplo', 123, 0, 'Estado Ejemplo', 'Ciudad Ejemplo', '12345', 'Nacionalidad Ejemplo', 'CURP12345678901234', 'RFC12345678901', 'Pais Ejemplo', 'Etnia Ejemplo', 'Antecedentes Ejemplo', 12345678, 98765432, 'correo@example.com', 'Emergencia 1', 'Parentesco 1', 55555555, 'Emergencia 2', 'Parentesco 2', 66666666, 'Estado Civil Ejemplo', 2, 987654321, 'A+', 'Enfermedades Crónicas Ejemplo', 'Alergias Ejemplo', 'Sede Ejemplo', 'Última Empresa Ejemplo', '5 años', 'Último Grado de Estudios Ejemplo', 'Idiomas Ejemplo', 'Certificaciones Ejemplo', 'Documentos Propios Ejemplo', 'Empresas en las que ha invertido Ejemplo', 'Empresas Socio Ejemplo', 'Historial Crediticio Ejemplo', 'Puesto Administrativo Ejemplo');
*/

create table Capital_Fundacion(IdCapFund int not null primary key,Socio int not null,CapitalAport int not null,foreign key(Socio) references Socios(NumIdenSoc)on delete cascade on update cascade);

/*INSERT INTO Capital_Fundacion (IdCapFund,Socio,CapitalAport) VALUES (1, 1234567890, 50000);*/

create table Gastos_Construccion (IdGastosCons int not null primary key,Concepto varchar(100) not null,Gastos int not null);

/*INSERT INTO Gastos_Construccion (IdGastosCons,Concepto,Gastos) VALUES (1, 'Materiales de construcción', 50000);*/

create table Estatutos (IdEstatutos int not null primary key,Estatuto varchar(200) not null);

/*INSERT INTO Estatutos (IdEstatutos, Estatuto) VALUES (1, 'El objetivo de la empresa es diseñar y fabricar productos electrónicos innovadores.'),*/

create table Escritura_unica_notarial(IdEscritura int not null primary key, VolunFund varchar(200),PersonalAdministracion varchar(25) not null,Socio_Escritura int not null, 
CapFundacion int not null,Gastos int not null, Estatutos_Escritura int not null,foreign key(PersonalAdministracion) references Personal_Administracion(PuestoAdmon) on delete cascade on update cascade,
foreign key(Socio_Escritura) references Socios(NumIdenSoc)on delete cascade on update cascade,foreign key(CapFundacion) references Capital_Fundacion(IdCapFund)on delete cascade on update cascade,
foreign key(Gastos) references Gastos_Construccion(IdGastosCons)on delete cascade on update cascade,foreign key(Estatutos_Escritura) references Estatutos(IdEstatutos)on delete cascade on update cascade);

create table Estatutos_Sociales (IdEstatutosSociales int not null primary key, NombreEst varchar(25)not null,ObjetoSocialEst varchar(25) not null,DuracionSociEst varchar(25) not null,
FechaInOpEst date not null,OrganoCompEst varchar(25) not null,ColoniaEst varchar(25) not null,CalleEst varchar(25) not null, NumExtEst int not null, NumIntEst int,EstadoEst varchar(25) not null, 
CiudadEst varchar(25) not null,CodPosEst varchar(25) not null, NacEst varchar(25) not null);

create table Certificado_Registro_Mercantil(IdCerResMerc int not null primary key,NombreEmpCer varchar(25) not null,giro varchar(50) not null);

create table Acciones(IdAcciones int not null primary key, SocioAccionista int not null,NoAcciones int not null,ValorAccion int not null,
foreign key(SocioAccionista) references Socios(NumIdenSoc)on delete cascade on update cascade);

create table Actas(NoActa int not null primary key,fechaActa date,AcuerdosActa varchar(200)not null);

create table Convocatorias(NoConv int not null primary key,fechaConv date,TemaConv varchar(200)not null);

create table OrdenDia(NoOrden int not null primary key,fechaOrdenes date,OrdenesDia varchar(200)not null);

create table Excusas(NoExcusa int not null primary key,fechaExcusa date,Excusa varchar(200)not null);

create table Asistentes(NoAsistente int not null primary key,fechaAsistencia date,CargoAsistente varchar(25)not null,NombreAsistente varchar(100)not null);

create table ModEstatutos(IdModEst int not null primary key,EstAnt int not null,ModEst varchar(200)not null,foreign key(EstAnt) references Estatutos(IdEstatutos)on delete cascade on update cascade);

create table Licencia_Apertura(IdLicAper int not null primary key,NombreEmpLic varchar(6)not null,GiroComerLic varchar(50)not null,EmplazamientoLic varchar(25),ExpedienteLic varchar(50),
AforoMaxLic int not null);

create table LicenciaFiscal(IdLicFis int not null primary key,RazonSocLicFis varchar(25) not null,TelefLicFis int not null,GiroComerLicFis varchar(50)not null,NoSerieLicFis varchar(10) not null,
ColoniaLicFis varchar(25) not null,CalleLicFis varchar(25) not null, NumExtLicFis int not null, NumIntLicFis int,EstadoLicFis varchar(25) not null,CiudadLicFis varchar(25) not null,
CodPosLicFis varchar(25) not null, NacLicFis varchar(25) not null);

create table Consejeros (NumIdenCon int not null primary key,APCon varchar(25) not null, AMCon varchar(25) not null, NomCon varchar(50) not null,
FechaNacCon date not null, ColoniaCon varchar(25) not null,CalleCon varchar(25) not null, NumExtCon int not null, NumIntCon int,EstadoCon varchar(25) not null, 
CiudadSoc varchar(25) not null,CodPosSoc varchar(25) not null, NacSoc varchar(25) not null, CurpSoc varchar(18) not null, RfcSoc varchar(13) not null, PaisNac varchar(25) not null,
EtniaCon varchar (25), antecendentesCon varchar(100) not null,TelFijoCon int not null,TelMovCon int not null,CorreoCon int not null,Emer1NomCon varchar(100) not null,
Emer1ParenCon varchar(25) not null,Emer1TelCon int not null,Emer2NomCon varchar(100) not null,Emer2ParenCon varchar(25) not null,Emer2TelCon int not null,EstCivilCon varchar(25),
HijosCon int not null,NumSegCon int  not null, TipoSangreCon varchar(3)  not null,EnferCronicasCon varchar(150) not null,AlergiaCon varchar(150) not null,
SedeCon varchar(50)  not null,UltimaEmpCon varchar(50) not null,TiempoLabCon varchar(20) not null, TiempoHuaweiCon varchar(50) not null,IdiomasCon varchar(150) not null, 
CertifCon varchar(150) not null,DocPropCon varchar(150) not null,HistCredCon varchar(100) not null,ProyectosPreviosComoConsejero varchar(200),LugarAdmonCon varchar(25) not null,
foreign key(LugarAdmonCon) references Personal_Administracion(PuestoAdmon)on delete cascade on update cascade);

create table Secretario (NumIdenSec int not null primary key,APSec varchar(25) not null, AMSec varchar(25) not null, NomSec varchar(50) not null,
FechaNacSec date not null, ColoniaSec varchar(25) not null,CalleSec varchar(25) not null, NumExtSec int not null, NumIntSec int,EstadoSec varchar(25) not null, 
CiudadSec varchar(25) not null,CodPosSec varchar(25) not null, NacSec varchar(25) not null, CurpSec varchar(18) not null, RfcSec varchar(13) not null, PaisNacSec varchar(25) not null,
EtniaSec varchar (25), antecendentesSec varchar(100) not null,TelFijoSec int not null,TelMovSec int not null,CorreoSec int not null,Emer1NomSec varchar(100) not null,
Emer1ParenSec varchar(25) not null,Emer1TelSec int not null,Emer2NomSec varchar(100) not null,Emer2ParenSec varchar(25) not null,Emer2TelSec int not null,EstCivilSec varchar(25),
HijosSec int not null,NumSegSec int  not null, TipoSangreSec varchar(3)  not null,EnferCronicasSec varchar(150) not null,AlergiaSec varchar(150) not null,
SedeSec varchar(50)  not null,UltimaEmpyPuestoSec varchar(50) not null,TiempoLabSec varchar(20) not null, TiempoHuaweiSec varchar(50) not null,IdiomasSec varchar(150) not null, 
CertifSec varchar(150) not null,DocPropSec varchar(150) not null,HistCredSec varchar(100) not null,ProyectosPreviosComoSecretario varchar(200),LugarAdmonSec varchar(25) not null,
foreign key(LugarAdmonSec) references Personal_Administracion(PuestoAdmon)on delete cascade on update cascade);

create table CEO (NumIdenCeo int not null primary key,APCeo varchar(25) not null, AMCeo varchar(25) not null, NomCeo varchar(50) not null,
FechaNacCeo date not null, ColoniaCeo varchar(25) not null,CalleCeo varchar(25) not null, NumExtCeo int not null, NumIntCeo int,EstadoCeo varchar(25) not null, 
CiudadCeo varchar(25) not null,CodPosCeo varchar(25) not null, NacCeo varchar(25) not null, CurpCeo varchar(18) not null, RfcCeo varchar(13) not null, PaisNacCeo varchar(25) not null,
EtniaCeo varchar (25), antecendentesCeo varchar(100) not null,TelFijoCeo int not null,TelMovCeo int not null,CorreoCeo int not null,Emer1NomCeo varchar(100) not null,
Emer1ParenCeo varchar(25) not null,Emer1TelCeo int not null,Emer2NomCeo varchar(100) not null,Emer2ParenCeo varchar(25) not null,Emer2TelCeo int not null,EstCivilCeo varchar(25),
HijosCeo int not null,NumSegCeo int  not null, TipoSangreCeo varchar(3)  not null,EnferCronicasCeo varchar(150) not null,AlergiaCeo varchar(150) not null,
CedulaProfCeo varchar(25)not null,SalarioCeo varchar(20)not null,SedeCeo varchar(50)  not null,UltimaEmpyPuestoCeo varchar(50) not null,TiempoLabCeo varchar(20) not null, 
TiempoHuaweiCeo varchar(50) not null,IdiomasCeo varchar(150) not null,CertifCeo varchar(150) not null,DocPropCeo varchar(150) not null,HistCredCeo varchar(100) not null,
ProyectosComoDirectorCeo varchar(200),LugarAdmonCeo varchar(25) not null,foreign key(LugarAdmonCeo) references Personal_Administracion(PuestoAdmon)on delete cascade on update cascade);

create table Representante_Legal(NumIdenRepLeg int not null primary key,APRepLeg varchar(25) not null, AMRepLeg varchar(25) not null, NomRepLeg varchar(50) not null,
FechaNacRepLeg date not null, ColoniaRepLeg varchar(25) not null,CalleRepLeg varchar(25) not null, NumExtRepLeg int not null, NumIntRepLeg int,EstadoRepLeg varchar(25) not null, 
CiudadRepLeg varchar(25) not null,CodPosRepLeg varchar(25) not null, NacRepLeg varchar(25) not null, CurpRepLeg varchar(18) not null, RfcRepLeg varchar(13) not null, PaisNacRepLeg varchar(25) not null,
EtniaRepLeg varchar (25), antecendentesRepLeg varchar(100) not null,TelFijoRepLeg int not null,TelMovRepLeg int not null,CorreoRepLeg int not null,Emer1NomRepLeg varchar(100) not null,
Emer1ParenRepLeg varchar(25) not null,Emer1TelRepLeg int not null,Emer2NomRepLeg varchar(100) not null,Emer2ParenRepLeg varchar(25) not null,Emer2TelRepLeg int not null,EstCivilRepLeg varchar(25),
HijosRepLeg int not null,NumSegRepLeg int  not null, TipoSangreRepLeg varchar(3)  not null,EnferCronicasRepLeg varchar(150) not null,AlergiaRepLeg varchar(150) not null,
CedulaProfRepLeg varchar(25)not null,SalarioRepLeg varchar(20)not null,SedeRepLeg varchar(50)  not null,UltimaEmpyPuestoRepLeg varchar(50) not null,TiempoLabRepLeg varchar(20) not null, 
TiempoEnHuaweiRepLeg varchar(50) not null,IdiomasRepLeg varchar(150) not null,CertifRepLeg varchar(150) not null,DocPropRepLeg varchar(150) not null,HistCredRepLeg varchar(100) not null,
LugarAdmonRepLeg varchar(25) not null,foreign key(LugarAdmonRepLeg) references Personal_Administracion(PuestoAdmon)on delete cascade on update cascade);

create table EntraYSalidaPersonal(IdEntSal int not null primary key,APEmpEntSal varchar(25) not null, AMEmpEntSal varchar(25) not null, NomEmpEntSal varchar(50) not null,AreaEmpEntSal varchar(25) not null,
FechaEmpEntSal date not null,EmpEnt time not null,EmpSal time not null,RevisadoPorEntSal varchar(100)not null,AprobadoPorEntSal varchar(100)not null);

create table DescPuesto(IdDescPuesto int not null primary key,NomPuestoDesc varchar(50)not null,DepDesc varchar(50)not null,JornadaDesc varchar(50)not null,HorarioDesc varchar(50)not null,
LugarTrabajoDesc varchar(50)not null,RelDeptosDesc varchar(50)not null,SupDirectoDesc varchar(100)not null,PropositoDesc varchar(50)not null,FuncionesRespDesc varchar(50)not null,
ExpPrevDesc varchar(50)not null,CompHabDesc varchar(50)not null,FormacionDesc varchar(50)not null,RangoSalarialDesc varchar(50)not null);

create table Profesiograma(IdProfesiograma int not null primary key,APProfe varchar(25) not null,AMProfe varchar(25) not null, NomProfe varchar(50) not null,PuestoProf varchar(50) not null,
EmpresaSolProfe varchar(50) not null,EdadProfe int not null,AspFisProfe int not null,LenguajeCorp int not null,AntPuestoProfe int not null,AntEmpProfe int not null,ExpPrevProfe int not null,
ConoProfe int not null,CompProfe int not null,EmpatiaProfe int not null,CapNegProfe int not null,IntProfe int not null,CapTrabProfe int not null,CapComuProfe int not null,CapLidProfe int not null,
CapAprenProfe int not null,CapTrabEquiProfe int not null,AdapProfe int not null,FlexiProfe int not null,RespPsicologicaProfe int not null,CoorProfe int not null,AptNumProfe int not null,AptVerbProfe int not null,
HabSupProfe int not null,SinceridadProfe int not null,SerenidadProfe int not null,SimpatiaProfe int not null,ExtrovertidoProfe int not null,DominanteProfe int not null,CreatividadProfe int not null,
IniciativaProfe int not null,RespProfe int not null,CoopProfe int not null,AlegreProfe int not null,SociableProfe int not null,AtencionProfe int not null,ConfianzaProfe int not null,ActivoProfe int not null,
OrdenadoProfe int not null,SeguroProfe int not null);

create table ControlVisitas(IdVisita int not null primary key,FechaVisita date,APPVisita varchar(25) not null,AMVisita varchar(25) not null, NomVisita varchar(50) not null,IdentVisita varchar(25)not null,TelVisita int not null,
APPVisitada varchar(25) not null,AMVisitada varchar(25) not null, NomVisitada varchar(50) not null,EntregaFolletoVisita varchar(20));

create table Empleados (NumIdenEmp int not null primary key,APEmp varchar(25) not null,AMEmp varchar(25) not null,NomEmp varchar(50) not null,
FechaNacEmp date not null, ColoniaEmp varchar(25) not null,CalleEmp varchar(25) not null, NumExtEmp int not null, NumIntEmp int,EstadoEmp varchar(25) not null, 
CiudadEmp varchar(25) not null,CodPosEmp varchar(25) not null, NacEmp varchar(25) not null, CurpEmp varchar(18) not null, RfcEmp varchar(13) not null,PaisEmp varchar(25) not null,
EtniaEmp varchar (25), antecendentesEmp varchar(100) not null,TelFijoEmp int not null,TelMovEmp int not null,CorreoEmp int not null,Emer1NomEmp varchar(100) not null,
Emer1ParenEmp varchar(25) not null,Emer1TelEmp int not null,Emer2NomEmp varchar(100) not null,Emer2ParenEmp varchar(25) not null,Emer2TelEmp int not null,EstCivilEmp varchar(25),
HijosEmp int not null,NumSegEmp int  not null, TipoSangreEmp varchar(3)  not null,EnferCronicasEmp varchar(150) not null,AlergiaEmp varchar(150) not null,
PuestoEmp varchar(50)  not null,SalarioEmp varchar(50) not null,SedeEmp varchar(20) not null,AreaEmp varchar(20) not null,TiempoLabEmp varchar(20) not null, UltimoGradoEmp varchar(50) not null,
IdiomasEmp varchar(150) not null,CertifEmp varchar(150) not null,FuncionesComputoEmp varchar(150) not null,MaqSepaManejarEmp varchar(150) not null,SoftDomineEmp varchar(150) not null);

create table ReciboSalario(IdReciboSalario int not null,NomEmpReciboSalario varchar(25) not null,NomEmpleadoReciboSalario int not null,DomicEmpReciboSalario varchar(50)not null,CifReciboSalario varchar(25)not null,
CtaCotSegReciboSalario int not null,NifReciboSalario varchar(25)not null,Matricula int not null,SecReciboSalario varchar(25)not null,NumSegSocReciboSalario int not null,GrupoProfReciboSalario varchar(25)not null,
GrupoCotizReciboSalario varchar(25)not null,AntiguedadReciboSalario varchar(25)not null,PeriodoLiqReciboSalario varchar(25)not null,TotalDiasReciboSalario int not null,SalBaseReciboSalario int not null,
HorasExtReciboSalario int not null,GratifExtReciboSalario int not null,SalEspReciboSalario int not null,ComSalReciboSalario varchar(50) not null,
IndemnizacionReciboSalario int not null,PrestSegSocReciboSalario int not null,IndemTrasReciboSalario int not null,OtrasPercepNoSalReciboSalario varchar(50)not null,
PorContComReciboSalario int not null,PorDesReciboSalario int not null,PorFormProfReciboSalario int not null,PorHorasExtReciboSalario int not null,PorEstrucReciboSalario int not null,PorNoestrucReciboSalario int not null,
TotalAportReciboSalario int not null,PorIsrFisicaReciboSalario int not null,AnticipoReciboSalario int not null,ValProdEspReciboSalario int not null,OtrasDeducReciboSalario int not null,
DeducTotalReciboSalario int not null,LiqTotalReciboSalario int not null,foreign key(Matricula) references Empleados(NumIdenEmp)on delete cascade on update cascade);

create table BaseCotizacionContingenciasComunes(IdBaseCotContCom int not null primary key,RemMenReciboSalario int not null,ProrrataPagaExtReciboSalario int not null,BaseIncTemReciboSalario int not null,
TotalCotContCom int not null);

create table BaseCotizacionContingenciasProf(IdBaseCotContProf int not null primary key,AtEpRecConjuntaReciboSalario int not null,BaseCotHoraExt int not null,BaseRetIrpf int not null);

create table CodigosAccidentes(IdCodigo int not null,NomCodigo varchar(25)not null);

create table ReporteAccidentes(IdReporteAccidentes int not null,APEmpReport varchar(25) not null,AMEmpReport varchar(25) not null,NomEmpReport varchar(50) not null,PuestoReport varchar(25) not null,
APSupInmedReport varchar(25) not null,AMSupInmedReport varchar(25) not null,NomSupInmedReport varchar(50) not null,FechaHoraReport datetime,CodigoAccidenteReport int not null,
TestigosAccidentesReport varchar(250) not null,EquipoEnvueltoReport varchar(25) not null,foreign key(CodigoAccidenteReport) references CodigosAccidentes(IdCodigo)on delete cascade on update cascade);

create table Certificaciones(NoRegistro varchar(25)not null primary key,NombreCert varchar(25)not null,TipoCert varchar(50)not null,EmpresaCert varchar(50)not null,FechaCert date not null,DescCert varchar(250)not null);

create table ProtocoloSimulacroSismo(IdProtocoloSim int not null primary key,RazonActivacionProt varchar(10) not null,FechaProt date not null,NomProt varchar(25)not null,MailProt varchar(35)not null,CelProt int not null,
PersonaQueLlenaFormularioProt varchar(50)not null,InmuProt varchar(25)not null,PisoProt varchar(25)not null,HoraIniProt time not null,HoraRegresoDesalojoProt time not null,TiempoEvacPby1Prot time not null,
TiempoRep2pisoSupProt time not null,TiempoEvac2PisoSupProt time not null,TiempoLlegadaPuntoReunionProt time not null,TiempoRepAntesBajarProt time not null,TiempoEvacPuntoReunionProt time not null,
PobFijaHomActivosProt int not null,PobFijaMujActivasProt int not null,PobFijaHomInactivosProt int not null,PobFijaMujInactivasProt int not null,PobFlotanteHomActivosProt int not null,PobFlotanteMujActivasProt int not null,
PobFlotanteHomInactivosProt int not null,PobFlotanteMujInactivasProt int not null,PobDiscapacidadHomActivosProt int not null,PobDiscapacidadMujActivasProt int not null,PobDiscapacidadHomInactivosProt int not null,
PobDiscapacidadMujInactivasProt int not null,AlertaAudibleProt varchar(2)not null,LugarDondeNoSeEscuchoAlertaProt varchar(25)not null,PersonasEnInstalacionesProt varchar(2)not null,DañosPersonasProt varchar(2)not null,
DañosBienesProt varchar(2)not null,ReanudarActividadesProt varchar(2)not null,RespMedidasCovidProt varchar(2)not null,ObservacionesProt varchar(300)not null);

create table CertificadoTrabajo(IdCertTrabajo int not null primary key,APGerenteRhCertTrab varchar(25) not null,AMGerenteRhCertTrab varchar(25) not null,NomGerenteRhCertTrab varchar(50) not null,CedulaGerenteRhCertTrab varchar(20) not null,
RolCertTrab varchar(25) not null,RucCertTrab varchar(25) not null,APEmpCertTrab varchar(25) not null,AMEmpCertTrab varchar(25) not null,NomEmpCertTrab varchar(50) not null,CedulaEmpCertTrab int not null,
AreaEmpCertTrab varchar(25) not null,FechaEmpCertTrab date not null,CargoEmpCertTrab varchar(25) not null,SalarioEmpCertTrab int not null,APRevCertTrab varchar(25) not null,
AMRevCertTrab varchar(25) not null,NomRevCertTrab varchar(50) not null,foreign key(CedulaEmpCertTrab) references Empleados(NumIdenEmp)on delete cascade on update cascade);

create table CertificadoLaboral(IdCertLab int not null primary key,APGerenteRhCertLab varchar(25) not null,AMGerenteRhCertLab varchar(25) not null,NomGerenteRhCertLab varchar(50) not null,CedulaGerenteRhCertLab varchar(20) not null,
RolCertLab varchar(25) not null,RucCertLab varchar(25) not null,APEmpCertLab varchar(25) not null,AMEmpCertLab varchar(25) not null,NomEmpCertLab varchar(50) not null,CedulaEmpCertLab int not null,
PuestoEmpCertLab varchar(25) not null,FechaIniEmpCertLab date not null,FechaFinEmpCertLab date not null,APRevCertLab varchar(25) not null,
AMRevCertLab varchar(25) not null,NomRevCertLab varchar(50) not null,foreign key(CedulaEmpCertLab) references Empleados(NumIdenEmp)on delete cascade on update cascade);

