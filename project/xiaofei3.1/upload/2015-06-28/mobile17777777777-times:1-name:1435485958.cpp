#include "iostream"
#include "string"
using namespace std;
////////////////////////////////////////////
enum Color{RED=1,GREEN=2,YELLOW=3,BLUE=4};
////////////////////////////////////////////
class Stack
{
public:
	int* base;
	int* top;
	int  stacksize;
	////////////////
	bool InitStack(int stacksize);
    bool Push(int e);
	bool Pop();
	int  Gettop();
	bool IsEmpty();
	bool IsPacked();
};
///////////////////////////////////////////////
class MGragh
{
public:
	int Number_Of_Vertex;
    string** Name_Of_Vertex;
	int**  Adjacency_Matrix;
	Stack  stack;
	///////////////
	void InitMGragh();
    bool Coloring();
	bool Is_Top_Feasible();
};
///////////////////////////////////////////////////
int main()
{
	bool Keep=true;
	int  key=1;
	while(Keep)
	{
		MGragh mgragh;
	    mgragh.InitMGragh();
	    mgragh.Coloring();
		cout<<"��ѡ�����:"<<endl;
        cout<<"1: ����"<<endl;
		cout<<"2: �˳�"<<endl;
		cin>>key;
		if(key==2)
			Keep=false;
	}
	return true;
}
//////////////////////////////////////////////
void MGragh::InitMGragh()
{
	int numberofcountries;
	cout<<"�����ͼ�Ϲ��ҵĸ���"<<endl;
    cin>>numberofcountries;
	this->Number_Of_Vertex=numberofcountries;
	this->stack.InitStack(this->Number_Of_Vertex);
	this->Name_Of_Vertex=new string*[this->Number_Of_Vertex];
	this->Adjacency_Matrix=new int*[this->Number_Of_Vertex];
	for(int n=0;n<this->Number_Of_Vertex;n++)
		this->Adjacency_Matrix[n]=new int[this->Number_Of_Vertex];


	cout<<"����������ҵ����֣��ո����"<<endl;
	for(int i=0;i<this->Number_Of_Vertex;i++)
	{
		this->Name_Of_Vertex[i]=new string();
		cin>>*this->Name_Of_Vertex[i];
	}

	cout<<"���水Ҫ�������ڽӾ���"<<endl;
	for(int x=0;x<this->Number_Of_Vertex;x++)
	{
		cout<<"�������ڽӾ����"<<x<<"��Ԫ�أ���Ԫ��֮��ո����"<<endl;
		for(int y=0;y<this->Number_Of_Vertex;y++)
		cin>>this->Adjacency_Matrix[x][y];
	}
    cout<<"׼���������"<<endl;
}
////////////////////
bool MGragh::Coloring()
{
	this->stack.Push(0);
	bool Keep=true;
	int temp=0;
	while(Keep)
	{
		temp=this->stack.Gettop();
		this->stack.Pop();
		this->stack.Push(++temp);
		while(temp<=4&&!this->Is_Top_Feasible())
		{
            this->stack.Pop();
		    this->stack.Push(++temp);
		}
		if(temp<=4&&this->stack.IsPacked())
		{
			int color;
			for(int i=this->Number_Of_Vertex-1;i>=0;i--)
			{
				cout<<"("<<*this->Name_Of_Vertex[i]<<" , ";
				color=this->stack.Gettop();
				switch(color)
				{
				case RED:cout<<"��ɫ)"<<endl;
					break;
				case GREEN:cout<<"��ɫ)"<<endl;
					break;
				case YELLOW:cout<<"��ɫ)"<<endl;
					break;
				case BLUE:cout<<"��ɫ)"<<endl;
					break;
				default:break;
				}
				this->stack.Pop();
			}
			Keep=false;
		}
		else if(temp<=4&&!this->stack.IsPacked())
		{
			this->stack.Push(0);
		}
		else
		{
			this->stack.Pop();
			if(this->stack.IsEmpty())
			{
				cout<<"�����޽⣬�����������Ƿ��ǵ�ͼ�Լ�����Ϣ��׼ȷ��"<<endl;
				return false;
			}
		}
	}
	return true;
}
///////////////
bool MGragh::Is_Top_Feasible()
{
	int m=this->stack.top-this->stack.base;
	int* temp=this->stack.base;
	int  tem=this->stack.Gettop();
	for(int i=0;i<m-1;i++,temp++)
	{
		if(*temp==tem&&Adjacency_Matrix[m-1][i]==1)
			return false;
	}
	return true;
}
////////////////////////////////////////////
bool Stack::InitStack(int stacksize)
{
	this->stacksize=stacksize;
	this->base=new int[this->stacksize];
	if(!base)
		return false;
	this->top=this->base;
	return true;
}
////////////////////
bool Stack::Push(int e)
{
	if(this->IsPacked())
		return false;
	*top++=e;
	return true;
}
/////////////////////
bool Stack::Pop()
{
	if(this->IsEmpty())
		return false;
	top--;
	return true;
}
////////////////////
int Stack::Gettop()
{
	return *(top-1);
}
///////////////////
bool Stack::IsEmpty()
{
	if(this->base==this->top)
		return true;
	else 
		return false;
}
///////////////////
bool Stack::IsPacked()
{
	if((this->top-this->base)>=this->stacksize)
		return true;
	else
		return false;
}
/////////////////////////////////////////////////////////////////////////////////
