Public Class component

    Public Sub New()
        mBenaming = ""
        mprijs = 0
    End Sub
    Public Sub New(ByVal benaming As String, ByVal prisj As Decimal)
        mprijs = prisj
        mBenaming = benaming
    End Sub


    Private mBenaming As String
    Public Property benaming() As String
        Get
            Return mBenaming
        End Get
        Set(ByVal value As String)
            mBenaming = value
        End Set
    End Property

    Private mprijs As Decimal
    Public Property prijs() As Decimal
        Get
            Return mprijs
        End Get
        Set(ByVal value As Decimal)
            mprijs = value
        End Set
    End Property


    Public Overrides Function ToString() As String
        Return mBenaming.PadRight(30, ".") & "€" & CStr(Me.prijs).PadLeft(8, " ")
    End Function






End Class
