Public Class Pc

    Public Sub New()
        mssd = New component
        mCasing = New component
        mMoederbord = New component
        mcpu = New component
        mgeheugen = New component
        mgrafisch = New component
    End Sub
    Private mCasing As component
    Public Property Casing() As component
        Get
            Return mCasing
        End Get
        Set(ByVal value As component)
            mCasing = value
        End Set
    End Property

    Private mssd As component
    Public Property ssd() As component
        Get
            Return mssd
        End Get
        Set(ByVal value As component)
            mssd = value
        End Set
    End Property
    Private mgrafisch As component
    Public Property grafisch() As component
        Get
            Return mgrafisch
        End Get
        Set(ByVal value As component)
            mgrafisch = value
        End Set
    End Property
    Private mgeheugen As component
    Public Property geheugen() As component
        Get
            Return mgeheugen
        End Get
        Set(ByVal value As component)
            mgeheugen = value
        End Set
    End Property
    Private mcpu As component
    Public Property cpu() As component
        Get
            Return mcpu
        End Get
        Set(ByVal value As component)
            mcpu = value
        End Set
    End Property
    Private mMoederbord As component
    Public Property Moederbord() As component
        Get
            Return mMoederbord
        End Get
        Set(ByVal value As component)
            mMoederbord = value
        End Set
    End Property


    Public Function berekentotalprijs() As Decimal
        Dim totaalprijs As Decimal
        totaalprijs += mCasing.prijs + mcpu.prijs + mgeheugen.prijs + mgrafisch.prijs + mMoederbord.prijs + mssd.prijs
        Return totaalprijs
    End Function
End Class
